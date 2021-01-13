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
    function checkout(){

        try{


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
            return response()->json(["success" => false, "msg" => $e->getMessage()]);
        }

    }

    function getSign(Request $request){

        $referenceCode = uniqid();
        $string = env("PAYU_API_KEY")."~".env("PAYU_MERCHANT_ID")."~".$referenceCode."~".$request->total."~COP";
        $hash = md5(strval($string));
        return response()->json(["hash" => $hash, "reference" => $referenceCode ]);

    }

    function payment(){

        return view("payment");

    }

    function confirmation(Request $request){
        
        Log::info('Showing log from confirmation checkout');
        //dd($request->all());
        

    }

    function response(Request $request){
        
        dd($request->all());
        return view("successPayment", ["payment" => $request->all()]);

    }

    function store(Request $request){

        try{

            $guestUser = $this->storeGuestUser($request);

            $payment = new Payment;
            $payment->status = "pending";
            $payment->total = $request->total;
            $payment->order_id = $request->reference;
            $payment->guest_user_id = $guestUser->id;
            $payment->address = $request->address;
            $payment->save();

            return response()->json(["success" => true]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un problema", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function storeGuestUser($request){

        $guestUser = GuestUser::updateOrCreate([
            "email" => $request->email
        ],[
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone
        ]);

        return $guestUser;
    }

}
