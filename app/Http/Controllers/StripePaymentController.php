<?php
    
namespace App\Http\Controllers;
  
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Stripe\Charge;

class StripePaymentController extends Controller
{


    public function stripe()
    {
        return view('pages.checkout');
    }

    public function stripePost(Request $request)
    {
        if (Auth::check()) {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            // Retrieve the authenticated user
            $user = Auth::user();

            // Your payment processing logic here...

            // Save payment-related information to the checkouts table
            $checkout = new Checkout();
            $checkout->payment = 5;
            $checkout->notes = ''; // You can add relevant notes if needed
            $checkout->booking_id = 1; // Set the booking ID as needed
            $checkout->address = $request->address; // Use the user's ID from the booking
            $checkout->timestamps = false; // To prevent Laravel from updating timestamps

            $checkout->save();

            Session::flash('success', 'Payment successful');

            return back();
        } else {
            // User is not authenticated, handle the case accordingly (e.g., redirect to login)
            return redirect()->route('login'); // Adjust this to your application's login route
        }
    }
}



// <?php

// namespace App\Http\Controllers;

// use App\Models\Checkout;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use Stripe\Stripe;
// use Stripe\Checkout\Session;

// class StripePaymentController extends Controller
// {
//     public function payment(Request $request)
//     {
//         if (Auth::check()) {
//           \Stripe\Stripe::SetApiKey(config('strip.stripe_sk'));
//             \Stripe\Stripe::setApiKey('sk_test_51NoRh3KjD3e5Hnk5snFlBHYl2YHnYsUbZ012l09868nPLxQgfCuesEAyP1sOF0BZfWDh9FBIWFP9tns1hM5LhI5n007xFC8uMV');
            
//             $response = Session::create([
//                 'line_items' => [
//                     [
//                         'price_data' => [
//                             'currency' => 'usd',
//                             'product_data' => [
//                                 'name' => 5,
//                             ],
//                             'unit_amount' => 5 * 100,
//                         ],
//                         'adjustable_quantity' => [
//                             'enabled' => true,
//                             'minimum' => 1,
//                             'maximum' => 10,
//                         ],
//                         'quantity' => 1,
//                     ],
//                 ],
//                 'automatic_tax' => ['enabled' => true],
//                 'mode' => 'payment',
//                  'success_url' => route('home'),
//                  'cancel_url' => route('about'),
//             ]);

      
//             $checkout = new Checkout();
//             $checkout->payment = 5;
//             $checkout->notes = ''; // You can add relevant notes if needed
//             $checkout->booking_id = 1; // Set the booking ID as needed
//             $checkout->address = $request->address; // Use the user's ID from the booking
//             $checkout->timestamps = false; // To prevent Laravel from updating timestamps

//             $checkout->save();

//             return redirect()->away($response->url);
//         } else {
//             // return redirect()->route('success');
//         }
//     }

//     public function success()
//     {
//         // return redirect()->route('finish');
//     }

//     public function cancel()
//     {
//     }
// }

