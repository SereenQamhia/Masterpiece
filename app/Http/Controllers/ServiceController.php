<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{    public function index()
    {
        $services = Service::all();
        return view('Dashboard.Services.index', compact('services'));
    }

   
    public function create()
    {
        return view('Dashboard.Services.create');
    }

    public function store( Request $request )
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);
    
        // Upload and store the image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $imageName);
    
        // Create a new Service with the image filename
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName, 
        ]);
    
        return redirect()->route('Services.index')->with(['success' => 'created successfully
        ']);
    }

    
    public function show($id)
    {
        //
    }

    public function edit($name)
    {
        $data = Service::where('name', $name)->first();
        return view('Dashboard.Services.edit', compact('data'));
    }

    public function update(Request $request, $name)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        Service::where(['name' => $name])->update($data);
        return redirect()->route('Services.index')->with(['success' => 'Updated successfully
        ']);
    }

  
    public function destroy($name)
    {
        Service::where('name', $name)->delete();
        return redirect()->route('Services.index');
    }

}
