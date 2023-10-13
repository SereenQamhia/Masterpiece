<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Professional;

class BookingController extends Controller
{
    public function store(Request $request)
{
    if (Auth::check()) {
        // User is logged in, perform the booking and store it in the database
        // $book = new Booking;
        // $book->user_id = auth()->user()->id;
        // $book->professional_id = $request->input('professional_id');
        // $book->time = $request->input('selected_hours');
        // $book->day = $request->input('selected_days');
        // $book->description = $request->description;
        // $book->save();
         $pro_id= $request->input('professional_id');
         $pro = Professional::where('id', $pro_id)->first();

        $request->session()->put('pending_booking', [
            'professional_id' => $request->input('professional_id'),
            'selected_hours' => $request->input('selected_hours'),
            'selected_days' => $request->input('selected_days'),
            'tools' => $request->input('tools'),
            'description' => $request->input('description'),
        ]);
        // dd(session()->get('pending_booking')); 
        
        return view("pages.checkout", compact('pro'));
        // return view("pages.checkout", ['booking' => $book]);
    } else {
        // User is not logged in, store the booking data in the session
        $request->session()->put('pending_booking', [
            'professional_id' => $request->input('professional_id'),
            'selected_hours' => $request->input('selected_hours'),
            'selected_days' => $request->input('selected_days'),
            'tools' => $request->input('tools'),
            'description' => $request->input('description'),
        ]);

        // dd(session()->get('pending_booking')); 

        // Redirect the user to the login or registration page
        return redirect()->route('login'); // You can replace 'login' with the actual route name for your login page.
    }
}

public function destroy($id){

    Booking::where('id', $id)->delete();
    return redirect()->route('profile');
}

}
