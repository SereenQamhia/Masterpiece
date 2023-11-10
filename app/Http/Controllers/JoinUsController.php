<?php

namespace App\Http\Controllers;
use App\Models\JoinUs;
use App\Models\Provider;
use App\Models\Professional;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class JoinUsController extends Controller
{
    public function index()
    {
        $JoinRequests = JoinUs::all();
        return view('Dashboard.JoinUs.index', compact('JoinRequests'));
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
        JoinUs::create([
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'location' => $request->location,
            'experience' => $request->experience,
            'age' => $request->age,
            'gender' => $request->gender,
            'image' => $imageName,
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
        
        Alert::success('Aplied Successfuly', 'We will review your application and contaact with you soon ');
    
        return redirect()->route('home');
    }

    
    public function show()
    {
        $Providers=Provider::all();
        return view('pages.join', compact('Providers'));
    }

    public function acceptJoinRequest($id)
    {
        $joinRequest = JoinUs::findOrFail($id);

        // Upload and store the image for the professional
        $image = $joinRequest->image;
        $proImage = time() . '.' . pathinfo($image, PATHINFO_EXTENSION);
        copy(public_path('img/' . $image), public_path('img/' . $proImage));
    
        // Upload and store the CV for the professional
        $cv = $joinRequest->cv;
        $cvFile = time() . '.' . pathinfo($cv, PATHINFO_EXTENSION);
        copy(public_path('cv/' . $cv), public_path('cv/' . $cvFile));
    
        // Create an array to store project image names
        $projectImages = [];
    
        // Loop through the project images and upload/store them
        for ($i = 1; $i <= 6; $i++) {
            $projectImage = $joinRequest["image{$i}"];
            
            if ($projectImage) {
                $projectImageName = time() . "_{$i}." . pathinfo($projectImage, PATHINFO_EXTENSION);
                copy(public_path('img/' . $projectImage), public_path('img/' . $projectImageName));
    
                // Store the project image name in the array with the loop index as the key
                $projectImages["image{$i}"] = $projectImageName;
            }
        }
    
        // Create a new Professional with data from the join request
        Professional::create([
            'name' => $joinRequest->name,
            'description' => $joinRequest->description,
            'email' => $joinRequest->email,
            'location' => $joinRequest->location,
            'experience' => $joinRequest->experience,
            'age' => $joinRequest->age,
            'gender' => $joinRequest->gender,
            'image' => $proImage,
            'cv' => $cvFile,
            'price' => $joinRequest->price,
            'profission' => $joinRequest->profission,
            'hoursofwork' => $joinRequest->hoursofwork,
            'daysofwork' => $joinRequest->daysofwork,
            'completed_jobs' => $joinRequest->completed_jobs,
            'provider_id' => $joinRequest->provider_id,
            'image1' => $projectImages['image1'] ?? null,
            'image2' => $projectImages['image2'] ?? null,
            'image3' => $projectImages['image3'] ?? null,
            'image4' => $projectImages['image4'] ?? null,
            'image5' => $projectImages['image5'] ?? null,
            'image6' => $projectImages['image6'] ?? null,
        ]);
    
        // Delete the join request
        $joinRequest->delete();

        return redirect()->route('JoinUs');
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        JoinUs::where(['id' => $id])->update($data);
        return redirect()->route('Professionals.index')->with(['success' => 'Updated successfully
        ']);
    }


    public function destroy($id)
    {
        JoinUs::destroy($id);
        return redirect()->route('JoinUs.index');
    }
}
