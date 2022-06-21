<?php
use App\Http\Controllers\GeoController;
use Illuminate\Support\Facades\Route;
/*Route :: get('/',function(){
    return view('welcome');
@});*/
Route :: get('/',[GeoController :: class,'index']);