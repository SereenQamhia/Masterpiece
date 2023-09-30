<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $Reviews = Review::with(['user', 'professional'])->get();
        return view('Dashboard.Reviews.index', compact('Reviews'));
    }

   
    public function create()
    {
        $Services = Service::all();
        return view('Dashboard.Reviews.create', compact('Services'));
    }

    public function store( Request $request )
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);
    
        
        // Create a new Review with the image filename
        Review::create([
            'name' => $request->name,
            'description' => $request->description,
            'service_name' => $request->Service,
            
        ]);
    
        return redirect()->route('Reviews.index')->with(['success' => 'created successfully
        ']);
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Review::find($id);
        return view('Dashboard.Reviews.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

     
        Review::where(['id' => $id])->update($data);
        return redirect()->route('Reviews.index')->with(['success' => 'Updated successfully
        ']);
    }

  
    public function destroy($id)
    {
        Review::destroy($id);
        return redirect()->route('Reviews.index');
    }
}
