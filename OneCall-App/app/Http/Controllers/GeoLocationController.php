<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class GeoLocationController extends Controller
{
    //
    public function index(Request $request){
 
        $userIpAddress = $request->ip();
        $locationData = \Location::get($userIpAddress );
        dd($locationData);
    }
}