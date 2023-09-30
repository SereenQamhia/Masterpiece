<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Provider;
use App\Models\Professional;
class HomeController extends Controller
{
    function showhome()
    {
         
          $services = DB::table('services')->get();
        //   $products = DB::table('products')->get();
        //   $users = DB::table('users')->get();
        //   $volanters = DB::table('paypals')->get();
        
          return view('pages.index', compact('services'));
     
    }

    function showprovider(Request $request)
    {  
        $name = $request->input('name');
        $providers = Provider::where('service_name', $name)->get();
        return view("pages.$name", compact('providers'));
    }

 

    public function showoptions(Request $request)
    {
    $id = $request->input('id');
    $professionals = Professional::where('provider_id', $id)->get();
    return view("pages.choose-pro", compact('professionals'));
    }

    public function showpro(Request $request)
    {
    $id = $request->input('id');
    $pro = Professional::where('id', $id)->first();
    return view("pages.professionalPage", compact('pro'));
    }
}
