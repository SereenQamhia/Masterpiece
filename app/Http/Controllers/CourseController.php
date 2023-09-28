<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $Courses = Course::all();
        return view('Dashboard.Courses.index', compact('Courses'));
    }

   
    public function create()
    {
        return view('Dashboard.Courses.create');
    }

    public function store( Request $request )
    {
        $validatedData = $request->validate([
            'title' => 'required',
       ]);
    
        // Upload and store the image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $imageName);
    
        // Create a new Course with the image filename
        Course::create([
            'title' => $request->title,
            'image' => $imageName, 
            'time' => $request->time,
            'location' => $request->location,
            'day' => $request->day,
            'price' => $request->price,
           
        ]);
    
        return redirect()->route('Courses.index')->with(['success' => 'created successfully
        ']);
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Course::find($id);
        return view('Dashboard.Courses.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Define the fields you want to update
        $data = [
            'title' => $request->input('title'),
            'time' => $request->input('time'),
            'location' => $request->input('location'),
            'day' => $request->input('day'),
            'price' => $request->input('price'),
        ];
    
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img/'), $imageName);
                $data['image'] = $imageName;
            } else {
                // Handle the case where the image is not valid (e.g., not an actual image file)
                return redirect()->route('Courses.index')->with(['error' => 'Invalid image file.']);
            }
        }
    
        // Update the record
        Course::where('id', $id)->update($data);
    
        return redirect()->route('Courses.index')->with(['success' => 'Updated successfully']);
    }
    

  
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('Courses.index');
    }
}
