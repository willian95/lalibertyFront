<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Municipality;
use App\Department;
use Illuminate\Support\Facades\Log;
use App\Payment;
use App\ProductPurchase;
use App\ProductColorSize;
use App\GuestUser;
use App\Mail;
use App\AdminMail;
//use GuzzleHttp\Client;

class PaymentController extends Controller
{
    

    function checkout(Request $request){
        ini_set("MAX_EXECUTION_TIME", 0);
        try{

            /*$payment = Payment::first();
            $user = GuestUser::find();
            $data = ["user" => $user, "products" => $products, "payment" => $payment];
                
            \Mail::send("emails.purchaseEmail", $data, function($message) use ($to_name, $to_email) {

                $message->to($to_email, $to_name)->subject("¡Haz realizado una compra en Laliberty.com!");
                $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));

            });*/

            $referenceCode = uniqid();
            $total = $request->total;
            $buyerMame = $request->buyerName;
            $payerName = $request->payerName;
            $email = $request->email;
            $phone = $request->phone;
            $dni = $request->dni;
            $street = $request->street;
            $city = Municipality::where("id", $request->municipalityId)->first()->municipality;
            $department = Department::where("id", $request->departmentId)->first()->department;
            $creditCardNumber = $request->creditCard;
            $cvv = $request->cvv;
            $expirationDate = $request->expirationDate;
            $creditCardFranchise = "Visa";
            $deviceSessionId = md5(session_id().microtime());//"vghs6tvkcle931686k1900o6e1";//
            $userAgent = $_SERVER['HTTP_USER_AGENT'];

            $paymentRequest = [
                "language"=> "es",
                "command"=> "SUBMIT_TRANSACTION",
                "merchant"=> [
                    "apiKey"=> "4Vj8eK4rloUd272L48hsrarnUA",
                    "apiLogin"=> "pRRXKOl8ikMmt9u"
                ],
                "transaction"=> [
                    "order"=> [
                        "accountId"=> "512321",
                        "referenceCode"=> $referenceCode,
                        "description"=> "Compra en laliberty",
                        "language"=> "es",
                        "signature"=> $this->getSign($referenceCode, $total),
                        "notifyUrl"=> url('/payment/confirmation'),
                        "additionalValues"=> [
                            "TX_VALUE"=> [
                                "value"=> $total,
                                "currency"=> "COP"
                            ],
                            "TX_TAX"=> [
                                "value"=> "0",
                                "currency"=> "COP"
                            ],
                            "TX_TAX_RETURN_BASE"=> [
                                "value"=> "0",
                                "currency"=> "COP"
                            ]
                        ],
                        "buyer"=> [
                            "fullName"=> $buyerMame,
                            "emailAddress"=> $email,
                            "contactPhone"=> $phone,
                            "dniNumber"=> $dni,
                            "shippingAddress"=> [
                                "street1"=> $street,
                                "city"=> $city,
                                "state"=> $department,
                                "country"=> "CO"
                            ]
                        ]
                    ],
                    "payer"=> [
                        "fullName"=> $payerName,
                        "emailAddress"=> $email,
                        "contactPhone"=> $phone,
                        "dniNumber"=> $dni,
                        "billingAddress"=> [
                            "street1"=> $street,
                            "city"=> $city,
                            "state"=> $department,
                            "country"=> "CO"
                        ]
                    ],
                    "creditCard"=> [
                        "number"=> $creditCardNumber,
                        "securityCode"=> $cvv,
                        "expirationDate"=> $expirationDate,
                        "name"=> $payerName
                    ],
                    "extraParameters"=> [
                        "INSTALLMENTS_NUMBER"=> 1
                    ],
                    "type"=> "AUTHORIZATION_AND_CAPTURE",
                    "paymentMethod"=> "VISA",
                    "paymentCountry"=> "CO",
                    "deviceSessionId"=> $deviceSessionId,
                    "ipAddress"=> "64.225.21.150",
                    "cookie"=> "pt1t38347bs6jc9ruv2ecpv7o2",
                    "userAgent"=> $userAgent
                ],
                "test"=> env("PAYU_TEST")
            ];

            $options = array(
                'http' => array(
                'method'  => 'POST',
                'content' => json_encode( $paymentRequest ),
                'header'=>  "Content-Type: application/json\r\n" .
                            "Accept: application/json\r\n"
                )
            );

            $context  = stream_context_create( $options );
            $result = file_get_contents( env("PAYU_URL"), false, $context );
            $response = json_decode( $result );

            //dd($response);
            
            $guestUser = GuestUser::updateOrCreate([
                "email" => $request->email
            ],[
                "name" => $request->buyerName,
                "address" => $request->street,
                "phone" => $request->phone
            ]);

            $payment = new Payment;
            if($response->transactionResponse->state == "APPROVED"){
                $payment->status = "aprobado";
            }else{
                $payment->status = "rechazado";
            }
            $payment->total = $request->total;
            $payment->order_id = $response->transactionResponse->transactionId;
            $payment->guest_user_id = $guestUser->id;
            $payment->address = Department::where("id", $request->departmentId)->first()->department.", ".Municipality::where("id", $request->municipalityId)->first()->municipality.", ".$request->street;
            $payment->save();

            if($response->transactionResponse->state == "APPROVED"){
  
                foreach($request->products as $product){

                    $productPurchase = new ProductPurchase();
                    $productPurchase->product_color_size_id = $product["productColorSize"]["id"];
                    $productPurchase->amount = 1;
                    $productPurchase->price = $product["productColorSize"]["price"];
                    $productPurchase->payment_id = $payment->id;
                    $productPurchase->save();
 
                    $product = ProductColorSize::where("id", $product["productColorSize"]["id"])->first();
                    $product->stock = $product->stock - 1;
                    $product->update();

                }

                $user = GuestUser::find($guestUser->id);
                $data = ["user" => $user, "products" => $request->products, "payment" => $payment];
                $to_name = $user->name;               
                $to_email = $user->email;

                \Mail::send("emails.purchaseEmail", $data, function($message) use ($to_name, $to_email) {

    
                    $message->to($to_email, $to_name)->subject("¡Haz realizado una compra en Laliberty Shop!");
                    $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));

                });

                foreach(AdminMail::all() as $admin){

                    $data = ["user" => $user, "products" => $request->products, "payment" => $payment];
                    $to_name = "Admin";               
                    $to_email = $admin->email;

                    \Mail::send("emails.adminPurchaseEmail", $data, function($message) use ($to_name, $to_email) {

        
                        $message->to($to_email, $to_name)->subject("¡Un cliente ha realizado una compra en Laliberty Shop!");
                        $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));

                    });

                }



                return response()->json(["success" => true, "msg" => "Pago realizado exitosamente"]);

            }else{
                
                $message = $response->transactionResponse->paymentNetworkResponseErrorMessage;
                if($message == "" || $message == null){
                    $message = $response->transactionResponse->responseMessage;
                }

                return response()->json(["success" => false, "msg" => $message, "data" => $response]);

            }

            
            

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Hubo un problema con su pago", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

    function getSign($referenceCode, $total){

        $string = env("PAYU_API_KEY")."~".env("PAYU_MERCHANT_ID")."~".$referenceCode."~".$total."~COP";
        $hash = md5(strval($string));
        return $hash;

    }

    function payment(){

        return view("payment");

    }

    function status(){

        return view("successPayment");

    }

}
