<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Booking;
use App\Models\Professional;

class ProfileController extends Controller
{
   
    public function show()
    { $id= auth()->user()->id;
      $userRole = auth()->user()->user_type;
      $bookings=Booking::where('user_id', $id)->with([ 'professional'])->get();

      $professionalInfo = null;
      if ($userRole === 'service_provider') {
          $professionalInfo = Professional::where('user_id', $id)->first();
      }

      
       return view('pages.profile' , compact('bookings' , 'professionalInfo'));
    }
    public function edit(Request $request): View
    {
        $user = $request->user();
        $professionalInfo = Professional::where('user_id', $user->id)->first(); // Adjust this based on your actual relationship
    
        return view('profile.edit', compact('user', 'professionalInfo'));
    }
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Update the user's profile data (name and email)
        $user->fill($request->only(['name', 'email']));
    
        // Check if the user uploaded a new image
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/'), $imageName);

            $user->image =  $imageName;
        }
    
        // Update the user's phone number
        $user->phone_number = $request->input('phone');
        $user->address = $request->input('address');
    
        // Reset email verification if email is changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
    
        // Save the user's updated profile
        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
