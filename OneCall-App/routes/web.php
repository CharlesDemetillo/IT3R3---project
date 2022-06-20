<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PageController;
use App\Http\Controllers\GeoLocationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('show-user-location-data', [LocationController::class, 'index']);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/userAccount', [App\Http\Controllers\UserAccountController::class, 'index'])->name('userAccount');
Route::get('/responseTeam', [App\Http\Controllers\ResponseTeamController::class, 'index'])->name('responseTeam');

Route::get('/dashboard',[PageController::class,'dashboard']);
Route::get('/account',[PageController::class,'account']);
Route::get('/call',[PageController::class,'call']);
Route::get('/cmessage',[PageController::class,'cmessage']);
Route::get('/contact',[PageController::class,'contact']);
Route::get('/emergency',[PageController::class,'emergency']);
Route::get('/response',[PageController::class,'response']);
Route::get('/rmessage',[PageController::class,'rmessage']);
Route::get('/status',[PageController::class,'status']);
Route::get('/user',[PageController::class,'user']);