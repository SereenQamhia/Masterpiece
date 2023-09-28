<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $Providers = Provider::all();
        return view('Dashboard.Providers.index', compact('Providers'));
    }

   
    public function create()
    {
        return view('Dashboard.Providers.create');
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
    
        // Create a new Provider with the image filename
        Provider::create([
            'name' => $request->name,
            'description' => $request->description,
            'service_id' => 8,
            'image' => $imageName, 
        ]);
    
        return redirect()->route('Providers.index')->with(['success' => 'created successfully
        ']);
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Provider::find($id);
        return view('Dashboard.Providers.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        Provider::where(['id' => $id])->update($data);
        return redirect()->route('Providers.index')->with(['success' => 'Updated successfully
        ']);
    }

  
    public function destroy($id)
    {
        Provider::destroy($id);
        return redirect()->route('Providers.index');
    }
}
