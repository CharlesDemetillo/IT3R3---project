<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class GeoController extends Controller
{
   public function index(Request $request){

    $ip = '210.185.188.175';
    $data = Location :: get($ip);
    dd($data);
    return view (view:'welcome');

    }
}
