<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use Auth;
use App\Models\Customer;
use App\Models\Payment;

class StripeController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email =$request->email;
        $customer->mobile =$request->mobile;
        $customer->save();
        
        return redirect()->route('stripe.payment');
      
    }
    
    public function handleGet()
    {
        return view('stripe');
    }
  
   
    public function handlePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
       $charge= Stripe\Charge::create ([
                "amount" =>100 * 200,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
        if($charge->paid){
            $payment= new Payment;
            $payment->Payment_id =$charge->id;
            $payment->Amount =$charge->amount/100;
            $payment->status =$charge ->status;
            $payment->save();
              
        }   
     
        Session::flash('success', 'Payment has been successfully processed.');
        return redirect()->route('index');  
  
     }

    public function Payment(Request $request)
    {
        $payment= new Payment;
        $payment->NameonCard =$request->NameonCard;
        $payment->CardNumber =$request->CardNumber;
        $payment->CVC =$request->CVC;
        $payment->ExpirationMonth =$request->ExpirationMonth;
        $payment->ExpirationYear =$request->ExpirationYear;
        $payment->save();

        return redirect()->route('index');
    }
    public function detail()
    {
        $payments= Payment::all();
        return view('detail',compact('payments'));
    }

    public function home()
    {
        $payments= Payment::all();
        return view('home',compact('payments'));
    }

}
