<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function list(Request $request){
        return json_encode(Account::all());
    }
    public function items(Request $request){
        return json_encode(Account::find($request->id));
    } 
    public function create(Request $request){
        $request->validate([
            'age' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'profile_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

            $data = new Account();
            $data->user_id = \Auth::id();
            $data->age = $request->age;
            $data->contact_no = $request->contact_no;
            $data->address = $request->address;
            if($request->hasFile('profile_picture')){
                $profile_name = $request->file('profile_picture')->getClientOriginalName();
                $profile_path = $request->file('profile_picture')->store('public/ProfilePicture');
                $data->profile_name = $profile_name;
                $data->profile_path = $profile_path;
            }
            $data->save();
            return json_encode(
                ['success'=>true]
            );
            }
        
        
    public function update(Request $request){
        $request->validate([
            'edit-name' => 'required',
            'edit-age' => 'required',
            'edit-contact_no' => 'required',
            'edit-address' => 'required',
            'edit-email' => 'required',
            'edit-password' => 'required',
            'edit-profile_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],);
        $data = Account::find($request->input("edit-id"));
        $data->name = $request->input("edit-name");
        $data->age = $request->input("edit-age");
        $data->contact_no = $request->input("edit-contact_no");
        $data->address = $request->input("edit-address");
        $data->email = $request->input("edit-email");
        $data->password = $request->input("edit-password");
        if($request->hasFile('edit-profile_picture')){
            $profile_name = $request->file('edit-profile_picture')->getClientOriginalName();
            $profile_path = $request->file('edit-profile_picture')->store('public/ProfilePicture');
            $data->profile_name = $profile_name;
            $data->profile_path = $profile_path;
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
