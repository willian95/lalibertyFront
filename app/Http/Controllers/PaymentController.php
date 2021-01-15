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

    function paymenntCheckAndProcess(Request $request){

        try{

            if(Payment::where("order_id", $request->referenceCode)->where("status", "!=", "pending")->count() > 0){
                return response()->json(["success" => false, "msg" => "Esta referencia ya fue utilizada"]);
            }

            $payment = $this->checkPayment($request->referenceCode, $request->message);
            
            if($request->message == "APPROVED"){
  
                foreach($request->products as $product){

                    $this->storeProductPurchase($product, $payment);
                    $this->substractAmountFromStock($product);
  
                }

                $this->sendEmailClient($request, $payment);
                $this->sendAdminMail($request, $payment);

                return response()->json(["success" => true, "msg" => "Pago realizado exitosamente"]);

            }

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Hubo un problema", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

    function checkPayment($referenceCode, $message){

        $payment = Payment::where("order_id", $referenceCode)->first();
        if($message == "APPROVED"){
            $payment->status = "aprobado";
        }else{
            $payment->status = "rechazado";
        }
        $payment->update();
        
        return $payment;

    }

    function storeProductPurchase($product, $payment){
        $productPurchase = new ProductPurchase();
        $productPurchase->product_color_size_id = $product["productColorSize"]["id"];
        $productPurchase->amount = 1;
        $productPurchase->price = $product["productColorSize"]["price"];
        $productPurchase->payment_id = $payment->id;
        $productPurchase->save();
    }

    function sendAdminMail($request, $payment){
        $user = GuestUser::where("email", $request->email)->first();
        foreach(AdminMail::all() as $admin){

            $data = ["user" => $user, "products" => $request->products, "payment" => $payment];
            $to_name = "Admin";               
            $to_email = $admin->email;

            \Mail::send("emails.adminPurchaseEmail", $data, function($message) use ($to_name, $to_email) {

                $message->to($to_email, $to_name)->subject("¡Un cliente ha realizado una compra en Laliberty Shop!");
                $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));

            });

        }

    }

    function sendEmailClient($request, $payment){

        $user = GuestUser::where("email", $request->email)->first();
        $data = ["user" => $user, "products" => $request->products, "payment" => $payment];
        $to_name = $user->name;               
        $to_email = $user->email;

        \Mail::send("emails.purchaseEmail", $data, function($message) use ($to_name, $to_email) {


            $message->to($to_email, $to_name)->subject("¡Haz realizado una compra en Laliberty Shop!");
            $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));

        });
    }

    function substractAmountFromStock($product){
        $product = ProductColorSize::where("id", $product["productColorSize"]["id"])->first();
        $product->stock = $product->stock - 1;
        $product->update();
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
        
        //Log::info("Showing log");
        Log::info('Showing log from confirmation checkout', $request["referenceCode"]);
        //dd($request->all());
        

    }

    function response(Request $request){
        
        //dd($request->all());
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
