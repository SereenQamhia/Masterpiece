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
          $Reviews = Review::with(['user', 'professional'])->orderBy('created_at', 'desc')->take(6)->get();
          return view('pages.index', compact('services' , 'Reviews'));
     
    }

  

    function showprovider($name)
    {  
        $providers = Provider::where('service_name', $name)->get();
        $professionals = Professional::where('profission', $name)->inRandomOrder()->limit(6)->get();
        return view("pages.$name", compact('providers' , 'professionals'));
    }

 

    public function showoptions($id)
    {
    // $id = $request->input('id');
    $professionals = Professional::where('provider_id', $id)->get();
    return view("pages.choose-pro", compact('professionals'));
    }

    public function showpro($id)
    {
    $pro = Professional::where('id', $id)->first();
    return view("pages.professionalPage", compact('pro'));
    }
}
