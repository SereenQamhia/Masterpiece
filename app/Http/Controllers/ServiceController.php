<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Provider;
use RealRashid\SweetAlert\Facades\Alert;


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
    
        Alert::success('Added Successfuly', ' ');
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

        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img/'), $imageName);
                $data['image'] = $imageName;
            } else {
                // Handle the case where the image is not valid (e.g., not an actual image file)
                return redirect()->route('Services.index')->with(['error' => 'Invalid image file.']);
            }
        }

        Service::where(['name' => $name])->update($data);

        Alert::success('Updated Successfuly', ' ');
        return redirect()->route('Services.index')->with(['success' => 'Updated successfully
        ']);
    }

    public function destroy($name)
    {
        $pro = Provider::select('*')
        ->where('service_name', $name)
        ->get();
        if ($pro->count()!= 0) {
          ;
          alert()->warning('You can\'t delete this item','There are providers under this service.');
            // Redirect to the 'category.index' route
              return redirect()->route('Services.index');

        }
        Service::where('name', $name)->delete();
        Alert::success('Deleted Successfuly', ' ');
          return redirect()->route('Services.index');
    }

}
