<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        // Set your Stripe secret key
        Stripe::setApiKey(config('stripe.secret_key'));

        return view('pages.checkout');
    }
    public function stripePost(Request $request)
    {
        // Stripe::setApiKey(config('stripe.secret_key'));
        if (Auth::check()) {

            Stripe::setApiKey(config('stripe.secret_key'));
            \Stripe\Stripe::setApiKey('sk_test_51NzRQgJx0tVN1X4wqAqacZHPCWN7YHpwZlRXqmDYkwuvoPVS3HRcrcJVoSPyw1oK7kqK650l3AnuBtWq6DrsZZhQ00qBrIAVhi');
            $user = Auth::user();

            // Retrieve data from the session
            $sessionData = $request->session()->get('pending_booking', []);

            // Create a new Booking instance and populate its attributes
            $booking = new Booking();
            $booking->user_id = $user->id;
            $booking->professional_id = $sessionData['professional_id'];
            $booking->payment = 3; // Set the payment as a constant value
            $booking->name = $request->input('name');
            $booking->address = $request->input('address');
            $booking->building = $request->input('building');
            $booking->phone = $request->input('phone');
            $booking->email = $request->input('email');

            // Populate other attributes from the session
            $booking->time = $sessionData['selected_hours'];
            $booking->day = $sessionData['selected_days'];
            $booking->tools = $sessionData['tools'];
            $booking->description = $sessionData['description'];

            $booking->notes = ''; // Set notes as needed

            $booking->save();

            $this->markHourAsBooked($sessionData['professional_id'], $sessionData['selected_days'], $sessionData['selected_hours']);

            // // Create a new Checkout instance and populate its attributes
            // $checkout = new Checkout();
            // $checkout->payment = 5;
            // $checkout->notes = ''; // You can add relevant notes if needed
            // $checkout->booking_id = $booking->id; // Set the booking ID as needed
            // $checkout->address = $request->address; // Use the user's ID from the booking
            // $checkout->timestamps = false; // To prevent Laravel from updating timestamps

            // $checkout->save();
            $professionalName = $booking->professional->name;
            $response = StripeSession::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => substr("Booking a service by {$professionalName} at {$booking->time} in {$booking->day}.\nYou will pay fees for our services which is", 0, 255),
                            ],
                            'unit_amount' => 3 * 100,
                        ],
                        'quantity' => 1,
                    ],
                ],

                'mode' => 'payment',
                'success_url' => route('home'),
                'cancel_url' => route('home'),
            ]);

            if (isset($response->id)) {
                // Session creation successful
                alert()->success('Booking Success', 'You have successfully booked a service by ' . $professionalName . ' at ' . $booking->time . ' in ' . $booking->day . '.');
                $request->session()->forget('pending_booking');
                return redirect()->away($response->url);
            } else {
                // Session creation failed
                alert()->error('Booking Error', 'There was an error processing your booking. Please try again.');
                return redirect()->route('home'); // Redirect to an appropriate page
            }
        } else {
            // Handle case where user is not authenticated
        }
    }

    private function markHourAsBooked($professionalId, $selectedDay, $selectedHour)
    {
        $bookedHour = new Schedule();
        $bookedHour->professional_id = $professionalId;
        $bookedHour->day = $selectedDay;
        $bookedHour->hour = $selectedHour;
        $bookedHour->save();
    }
}
