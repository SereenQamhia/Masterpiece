<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        
        return view('Dashboard.adminProfile');
    }

    public function create()
    {
        return view('Dashboard.Admins.create');
    }

    public function store( Request $request )
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);
    
        // Upload and store the image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $imageName);
    
        $hashedPassword = Hash::make($request->password);

        // Create a new Admin with the image filename
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'image' => $imageName, 
        ]);
    
        Alert::success('Created Successfuly', ' ');
        return redirect()->route('Admins.index')->with(['success' => 'created successfully
        ']);
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Admin::find($id);
        return view('Dashboard.Admins.edit', compact('data'));
    }

  

    public function update(Request $request, $adminProfile)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', // Add any other validation rules for email
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add any other validation rules for image upload
        ]);
    
        // Find the admin profile by ID
        $admin = Admin::findOrFail($adminProfile);
    
        // Update the user data
        $admin->name = $request->name;
        $admin->email = $request->email;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Process and store the image
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imageName);
            $admin->image = $imageName;
        }
    
        // Save the changes
        $admin->save();
    
        // Redirect with success message
        return redirect()->route('adminProfile.index')->with('success', 'Profile updated successfully');
    }
    
    


    public function destroy($id)
    {
        alert()->warning('WarningAlert','Lorem ipsum dolor sit amet.');
        Admin::destroy($id);

        return redirect()->route('Admins.index');
    }
}
