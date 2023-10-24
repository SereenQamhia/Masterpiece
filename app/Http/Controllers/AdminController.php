<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $Admins = Admin::all();
        return view('Dashboard.Admins.index', compact('Admins'));
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

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        Admin::where(['id' => $id])->update($data);
        Alert::success('Added Successfuly', ' ');
        return redirect()->route('Admins.index')->with(['success' => 'Updated successfully
        ']);
    }


    public function destroy($id)
    {
        alert()->warning('WarningAlert','Lorem ipsum dolor sit amet.');
        Admin::destroy($id);

        return redirect()->route('Admins.index');
    }
}
