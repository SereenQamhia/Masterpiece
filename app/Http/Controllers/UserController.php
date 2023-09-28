<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::all();
        return view('Dashboard.Users.index', compact('Users'));
    }

    public function create()
    {
        return view('Dashboard.Users.create');
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
    
        // Create a new User with the image filename
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'user_type' => $request->customer,
            'image' => $imageName, 
        ]);
    
        return redirect()->route('Users.index')->with(['success' => 'created successfully
        ']);
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('Dashboard.Users.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        User::where(['id' => $id])->update($data);
        return redirect()->route('Users.index')->with(['success' => 'Updated successfully
        ']);
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('Users.index');
    }
}
