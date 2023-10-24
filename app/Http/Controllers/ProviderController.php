<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\Service;
use App\Models\Professional;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProviderController extends Controller
{
    public function index()
    {
        $Providers = Provider::all();
        return view('Dashboard.Providers.index', compact('Providers'));
    }

   
    public function create()
    {
        $Services = Service::all();
        return view('Dashboard.Providers.create', compact('Services'));
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
            'service_name' => $request->Service,
            'image' => $imageName, 
        ]);
    
        Alert::success('Added Successfuly', ' ');
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

        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img/'), $imageName);
                $data['image'] = $imageName;
            } else {
                // Handle the case where the image is not valid (e.g., not an actual image file)
                return redirect()->route('Providers.index')->with(['error' => 'Invalid image file.']);
            }
        }
        Provider::where(['id' => $id])->update($data);
        Alert::success('Updated Successfuly', ' ');
        return redirect()->route('Providers.index')->with(['success' => 'Updated successfully
        ']);
    }

  
    // public function destroy($id)
    // {
        
        
    //     Provider::destroy($id);
    //     return redirect()->route('Providers.index');
    // }

    public function destroy($id)
    {
        $pro = Professional::select('*')
        ->where('provider_id', $id)
        ->get();
        if ($pro->count()!= 0) {
          ;
          alert()->warning('You can\'t delete it','There are Professionals under this provider.');
            // Redirect to the 'category.index' route
            return redirect()->route('Providers.index');

        }
        Service::where('name', $id)->delete();
        Alert::success('Deleted Successfuly', ' ');
        return redirect()->route('Providers.index');
    }
}
