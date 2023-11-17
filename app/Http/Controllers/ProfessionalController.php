<?php

namespace App\Http\Controllers;
use App\Models\Professional;
use App\Models\Provider;
use Illuminate\Http\Request;
use DB;

class ProfessionalController extends Controller
{
   
    public function index()
{
    $Professionals = Professional::select('*', DB::raw('LEFT(description, 50) as truncated_description'), DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'))->get();

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

    public function professionalUpdate(Request $request)
    {
        // Assuming you have a user_id associated with the professional info
        $user = $request->user();
        $professional = $user->professional; // Assuming a one-to-one relationship, adjust if needed
    
        if (!$professional) {
            // Handle the case where professional info doesn't exist for the user
            return redirect()->route('profile.edit')->with('status','Professional info not found');
        }
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/'), $imageName);

            $professional->image =  $imageName;
        }
        // Update the fields
        $professional->name = $request->name;
        $professional->description = $request->description;
        $professional->profission = $request->profission;
        $professional->email = $request->email;
        $professional->location = $request->location;
        $professional->cv = $request->cv;
        $professional->experience = $request->experience;
        $professional->age = $request->age;
        $professional->price = $request->price;
        $professional->completed_jobs = $request->completed_jobs;
        $professional->hoursofwork = $request->hoursofwork;
        $professional->daysofwork = $request->daysofwork;
    
        // Save the changes
        $professional->save();
    
        return redirect()->route('profile.edit')->with('status', 'professional-info-updated');
    }


    public function destroy($id)
    {
        
        Professional::destroy($id);
        return redirect()->route('Professionals.index');
    }
}
