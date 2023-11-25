<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Service;
use App\Models\Booking;
use App\Models\Professional;
use App\Models\JoinUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DashController extends Controller
{
    public function index()
    {
        $serviceCount = Service::count();
        $bookingCount = Booking::count();
        $providerCount = Professional::count();
        $JoinUsCount = JoinUs::count();
        return view('Dashboard.index', ['serviceCount' => $serviceCount ,'bookingCount' => $bookingCount ,'providerCount' => $providerCount , 'JoinUsCount' => $JoinUsCount]);
    }


  











}
