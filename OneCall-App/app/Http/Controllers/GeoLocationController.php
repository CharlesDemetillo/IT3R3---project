<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class GeoLocationController extends Controller
{
    public function index(Request $request)
    {
            $userIp = $request->ip();
            $locationData = \Location::get($userIp);
            
            dd($locationData);
    }
}