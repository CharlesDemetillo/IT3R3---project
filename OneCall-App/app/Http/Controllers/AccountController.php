<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Account;

class AccountController extends Controller
{
    public function list(Request $request){
        return json_encode(Account::with(['user'])->get());
    }
    public function items(Request $request){
        return json_encode(Account::with(['user'])->find($request->id));
    } 
    public function create(Request $request){
        $request->validate([
            'name' => 'required|unique:account',
            'user_id' => 'required|unique:account',
            'age' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'email' => 'required|unique:account',
            'password' => 'required',
            'user_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $data = new Account();
        $data->name = $request->name;
        $data->user_id = $request->user_id;
        $data->age = $request->age;
        $data->contact_no = $request->contact_no;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->password = $request->password;
        if($request->hasFile('user_picture')){
            $picture_name = $request->file('user_picture')->getClientOriginalName();
            $picture_path = $request->file('user_picture')->store('public/Pictures');
            $data->picture_name = $picture_name;
            $data->picture_path = $picture_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function update(Request $request){
        $request->validate([
            'edit-name' => 'required|unique:account',
            'edit-user_id' => 'required|unique:account',
            'edit-age' => 'required',
            'edit-contact_no' => 'required',
            'edit-address' => 'required',
            'edit-email' => 'required|unique:account',
            'edit-password' => 'required',
            'edit-user_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],);
        $data = Account::find($request->input("edit-id"));
        $data->name = $request->input("edit-name");
        $data->user_id = $request->input("edit-user_id");
        $data->age = $request->input("edit-age");
        $data->contact_no = $request->input("edit-contact_no");
        $data->address = $request->input("edit-address");
        $data->email = $request->input("edit-email");
        $data->password = $request->input("edit-password");
        if($request->hasFile('edit-user_picture')){
            $picture_name = $request->file('edit-user_picture')->getClientOriginalName();
            $picture_path = $request->file('edit-user_picture')->store('public/Pictures');
            $data->picture_name = $picture_name;
            $data->picture_path = $picture_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        );        
    }
    public function delete(Request $request){
        $data = Account::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
}
