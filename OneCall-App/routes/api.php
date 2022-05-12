<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CmessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\RmessageController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Account
Route::match(['get','post',], 'account/list', [AccountController::class,'list']);
Route::match(['get','post',], 'account/items', [AccountController::class,'items']);
Route::match(['get','post',], 'account/create', [AccountController::class,'create']);
Route::match(['get','post',], 'account/update', [AccountController::class,'update']);
Route::match(['get','post',], 'account/delete', [AccountController::class,'delete']);

//Call
Route::match(['get','post',], 'call/list', [CallController::class,'list']);
Route::match(['get','post',], 'call/items', [CallController::class,'items']);
Route::match(['get','post',], 'call/create', [CallController::class,'create']);
Route::match(['get','post',], 'call/update', [CallController::class,'update']);
Route::match(['get','post',], 'call/delete', [CallController::class,'delete']);

//Cmessage
Route::match(['get','post',], 'cmessage/list', [CmessageController::class,'list']);
Route::match(['get','post',], 'cmessage/items', [CmessageController::class,'items']);
Route::match(['get','post',], 'cmessage/create', [CmessageController::class,'create']);
Route::match(['get','post',], 'cmessage/update', [CmessageController::class,'update']);
Route::match(['get','post',], 'cmessage/delete', [CmessageController::class,'delete']);

//Contact
Route::match(['get','post',], 'contact/list', [ContactController::class,'list']);
Route::match(['get','post',], 'contact/items', [ContactController::class,'items']);
Route::match(['get','post',], 'contact/create', [ContactController::class,'create']);
Route::match(['get','post',], 'contact/update', [ContactController::class,'update']);
Route::match(['get','post',], 'contact/delete', [ContactController::class,'delete']);

//Emergency
Route::match(['get','post',], 'emergency/list', [EmergencyController::class,'list']);
Route::match(['get','post',], 'emergency/items', [EmergencyController::class,'items']);
Route::match(['get','post',], 'emergency/create', [EmergencyController::class,'create']);
Route::match(['get','post',], 'emergency/update', [EmergencyController::class,'update']);
Route::match(['get','post',], 'emergency/delete', [EmergencyController::class,'delete']);

//Response
Route::match(['get','post',], 'response/list', [ResponseController::class,'list']);
Route::match(['get','post',], 'response/items', [ResponseController::class,'items']);
Route::match(['get','post',], 'response/create', [ResponseController::class,'create']);
Route::match(['get','post',], 'response/update', [ResponseController::class,'update']);
Route::match(['get','post',], 'response/delete', [ResponseController::class,'delete']);

//Rmessage
Route::match(['get','post',], 'rmessage/list', [RmessageController::class,'list']);
Route::match(['get','post',], 'rmessage/items', [RmessageController::class,'items']);
Route::match(['get','post',], 'rmessage/create', [RmessageController::class,'create']);
Route::match(['get','post',], 'rmessage/update', [RmessageController::class,'update']);
Route::match(['get','post',], 'rmessage/delete', [RmessageController::class,'delete']);

//Status
Route::match(['get','post',], 'status/list', [StatusController::class,'list']);
Route::match(['get','post',], 'status/items', [StatusController::class,'items']);
Route::match(['get','post',], 'status/create', [StatusController::class,'create']);
Route::match(['get','post',], 'status/update', [StatusController::class,'update']);
Route::match(['get','post',], 'status/delete', [StatusController::class,'delete']);

//User
Route::match(['get','post',], 'user/list', [UserController::class,'list']);
Route::match(['get','post',], 'user/items', [UserController::class,'items']);
Route::match(['get','post',], 'user/create', [UserController::class,'create']);
Route::match(['get','post',], 'user/update', [UserController::class,'update']);
Route::match(['get','post',], 'user/delete', [UserController::class,'delete']);
