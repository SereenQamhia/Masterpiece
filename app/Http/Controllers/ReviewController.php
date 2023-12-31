<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Professional;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $Reviews = Review::with(['user', 'professional'])->get();
        return view('Dashboard.Reviews.index', compact('Reviews'));
    }

   
    public function create()
    {
      //
    }

    public function store(Request $request)
    {
        $review = new Review;
        $review->user_id = auth()->user()->id;
        $review->professional_id = $request->input('professional_id');
        $review->rating = $request->rating;
        $review->review_text = $request->comment;
        $review->save();
    
        // Calculate the new average rating
        $professional = Professional::find($request->input('professional_id'));
        $averageRating = $professional->reviews()->avg('rating');
    
        // Update the professional's rating
        $professional->rating = $averageRating;
        $professional->save();
    
        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
    
    public function show($id)
    {
        //
    }

  

  
    public function destroy($id)
    {
        Review::destroy($id);
        return redirect()->route('Reviews.index');
    }
}
