<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe; //to trigger the library we install (composer require stripe/stripe-php)

class PaymentController extends Controller
{
    public function paymentPost(Request $request){ 

    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => $request->sub*100, //it will capture the "sub" that we declared
            //in myCart.php ->name="sub", id= "sub"
            "currency" => "MYR",
            "source" => $request->stripeToken,
            "description"=> "This payment is testing purpose of southern online",
        ]);
        
        return back();
    }
}