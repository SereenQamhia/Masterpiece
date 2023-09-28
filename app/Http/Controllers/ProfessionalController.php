<?php

namespace App\Http\Controllers;
use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
   
    public function index()
    {
        $Professionals = Professional::all();
        return view('Dashboard.Professionals.index', compact('Professionals'));
    }

    public function create()
    {
        return view('Dashboard.Professionals.create');
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
    
        // Create a new Professional with the image filename
        Professional::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' => $request->password,
            'phone_number' => $request->phone,
            'Professional_type' => $request->role,
            'image' => $imageName, 
        ]);
    
        return redirect()->route('Professionals.index')->with(['success' => 'created successfully
        ']);
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Professional::find($id);
        return view('Dashboard.Professionals.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        Professional::where(['id' => $id])->update($data);
        return redirect()->route('Professionals.index')->with(['success' => 'Updated successfully
        ']);
    }


    public function destroy($id)
    {
        Professional::destroy($id);
        return redirect()->route('Professionals.index');
    }
}
