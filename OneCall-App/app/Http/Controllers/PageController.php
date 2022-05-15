<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Call;
use App\Models\Cmessage;
use App\Models\Contact;
use App\Models\Emergency;
use App\Models\Response;
use App\Models\Rmessage;
use App\Models\Status;


class PageController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function account(){
        $data = Account::all();
        return view('account',compact('data'));
    }
    public function call(){
        $call = Call::all();
        $account = Account::all();
        $emergency = Emergency::all();
        return view('call',compact('call','account','emergency'));
    }
    public function cmessage(){
        $cmessage = Cmessage::all();
        $account = Account::all();
        $contact = Contact::all();
        return view('cmessage',compact('cmessage','account','contact'));
    }
    public function contact(){
        $contact = Contact::all();
        $account = Account::all();
        return view('contact',compact('contact','account'));
    }
    public function emergency(){
        $emergency = Emergency::all();
        $account = Account::all();
        $response = Response::all();
        return view('emergency',compact('emergency','account','response'));
    }
    public function rmessage(){
        $rmessage = Rmessage::all();
        $emergency = Emergency::all();
        $response = Response::all();
        return view('rmessage',compact('rmessage','emergency','response'));
    }
    public function status(){
        $status = Status::all();
        $emergency = Emergency::all();
        $response = Response::all();
        return view('status',compact('status','emergency','response'));
    }
    public function user(){
        $data = User::all();
        return view('user',compact('data'));
    }
}
