<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $book = new Booking;
        $book->user_id = auth()->user()->id;
        $book->professional_id = $request->input('professional_id'); 
        $book->time = $request->input('selected_hours');
        $book->day = $request->input('selected_days');
        $book->description = $request->description;
        $book->save();
        
    
        return view("pages.checkout", ['booking' => $book]);
    }
}
