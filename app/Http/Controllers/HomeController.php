<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Provider;
use App\Models\Professional;
class HomeController extends Controller
{
    function showhome()
    {
         
          $services = DB::table('services')->get();
          $courses = DB::table('courses')->get();
          $Reviews = Review::with(['user', 'professional'])->orderBy('created_at', 'desc')->take(6)->get();
          return view('pages.index', compact('services' , 'Reviews' , 'courses'));
     
    }

  

    function showprovider($name)
    {  
        $providers = Provider::where('service_name', $name)->get();
        $professionals = Professional::where('profission', $name)->inRandomOrder()->limit(6)->get();
        return view("pages.$name", compact('providers' , 'professionals'));
    }

 
    public function showoptions(Request $request, $id)
    {
        // Get the selected filters from the request
        $filters = $request->all();
    
        // Start with a base query
        $query = Professional::where('provider_id', $id);
    
        // Apply filters based on the selected criteria
    
        if (isset($filters['locations']) && in_array('all', $filters['locations'])) {
            // If "all" filter is selected, no location filter is applied
        } elseif (isset($filters['locations'])) {
            // Apply location filter for multiple selections
            $query->whereIn('location', $filters['locations']);
        }
    
        if (isset($filters['sort_by'])) {
            // Apply sorting based on the selected option
            if ($filters['sort_by'] === 'popularity') {
                $query->orderBy('id', 'asc');
            } elseif ($filters['sort_by'] === 'price_low_to_high') {
                $query->orderBy('price', 'asc');
            } elseif ($filters['sort_by'] === 'price_high_to_low') {
                $query->orderBy('price', 'desc');
            }
        }
    
        if (isset($filters['genders'])) {
            // Apply gender filter for multiple selections
            $query->whereIn('gender', $filters['genders']);
        }
    
        if (isset($filters['experience'])) {
            // Apply experience filter
            $query->where('experience', '>=', $filters['experience']);
        }
    
        // Execute the final query and paginate the results
        $professionals = $query->paginate(6);
    
        return view("pages.choose-pro", compact('professionals'));
    }
    

    
    
    public function showpro($id)
    {
    $pro = Professional::where('id', $id)->first();
    $Reviews = Review::with(['user', 'professional'])->where('professional_id', $id)->get();
    $workDays = explode(',', $pro->daysofwork);
    $workHours = explode(',', $pro->hoursofwork);


    return view("pages.professionalPage", compact('pro' , 'Reviews','workDays', 'workHours'));
    }
}
