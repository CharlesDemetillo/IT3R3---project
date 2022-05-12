<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Response;

class ResponseController extends Controller
{
    public function list(Request $request){
        return json_encode(Response::all());
    }
    public function items(Request $request){
        return json_encode(Response::find($request->id));
    } 
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
            'password' => 'required',
            'logo_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],);
        $data = new Response();
        $data->name = $request->name;
        $data->contact_no = $request->contact_no;
        $data->email = $request->email;
        $data->password = $request->password;
        if($request->hasFile('logo_picture')){
            $logo_name = $request->file('logo_picture')->getClientOriginalName();
            $logo_path = $request->file('logo_picture')->store('public/LogoPicture');
            $data->logo_name = $logo_name;
            $data->logo_path = $logo_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }

    public function update(Request $request){
        $request->validate([
            'edit-name' => 'required',
            'edit-contact_no' => 'required',
            'edit-email' => 'required',
            'edit-password' => 'required',
            'edit-logo_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],);
        $data = Response::find($request->input("edit-id"));
        $data->name = $request->input("edit-name");
        $data->contact_no = $request->input("edit-contact_no");
        $data->email = $request->input("edit-email");
        $data->password = $request->input("edit-password");
        if($request->hasFile('edit-logo_picture')){
            $logo_name = $request->file('edit-logo_picture')->getClientOriginalName();
            $logo_path = $request->file('edit-logo_picture')->store('public/logoPicture');
            $data->logo_name = $logo_name;
            $data->logo_path = $logo_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        );        
    }

    public function delete(Request $request){
        $data = Response::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
}
