<?php

namespace App\Http\Controllers;
use App\Models\Professional;
use App\Models\Provider;
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
        $Providers=Provider::all();
        return view('Dashboard.Professionals.create' , compact('Providers'));
    }

    public function store( Request $request )
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);
    
        // Upload and store the image
        $image = $request->file('image');
        $proimage = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $proimage);

        $pdfFile = $request->file('cv');
        $CV = time() . '.' . $pdfFile->getClientOriginalExtension();
        $pdfFile->move(public_path('cv'), $CV);
           
        $imageNames = []; // Create an array to store image names

        for ($i = 1; $i <= 6; $i++) {
            $image = $request->file("image{$i}");
            
            if ($image) {
                $imageName = time() . "_{$i}." . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
        
                // Store the image name in the array with the loop index as the key
                $imageNames[$i] = $imageName;
            }
        }
         
      
        // Create a new Professional with the image filename
        Professional::create([
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'location' => $request->location,
            'experience' => $request->experience,
            'age' => $request->age,
            'gender' => $request->gender,
            'image' => $proimage,
            'cv' => $CV,
            'price' => $request->price,
            'profission' => $request->profission,
            'hoursofwork' => $request->hoursofwork,
            'daysofwork' => $request->daysofwork,
            'completed_jobs' => $request->completed_jobs,
            'provider_id' => $request->provider_id,
            'image1' => $imageNames[1],
            'image2' => $imageNames[2],
            'image3' => $imageNames[3],
            'image4' => $imageNames[4],
            'image5' => $imageNames[5],
            'image6' => $imageNames[6],
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
