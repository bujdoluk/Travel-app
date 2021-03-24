<?php


namespace App\Http\Controllers;


use Cartalyst\Stripe\Laravel\Facades\Stripe;
use http\Exception;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        return view('checkout');
    }
    // Youtube 19:50 Andre Madarang
    public function store(Request $request) {

        try{
            $charge = Stripe::charges()->create([
                'amount' => Cart::total() / 100,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    // change to Order ID after starting using DB
                    /*'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),*/
                ],
            ]);

        } catch(Exception $e) {

        }
    }
}
