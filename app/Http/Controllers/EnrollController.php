<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;

class EnrollController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'course_name' => 'required',
            'experience' => 'nullable',
        ]);

        // Store the enrollment in the database
        Enroll::create($validatedData);

      

        // You can add a success message or redirect the user to a thank you page
        return redirect()->back()->with('success', 'Enrollment successful!');
    }
}
