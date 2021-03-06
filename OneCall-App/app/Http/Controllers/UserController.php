<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\User;

class UserController extends Controller
{
    public function list(Request $request){
        return json_encode(User::all());
    }
    public function items(Request $request){
        return json_encode(User::find($request->id));
    } 
    public function create(Request $request){
        $request->validate([
            'name' => 'required|unique:users',
            'age' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'userType' => 'required',
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->age = $request->age;
        $data->contact_no = $request->contact_no;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->userType = $request->userType;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'name' => 'required|unique:users',
            'age' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'userType' => 'required',
        ]);
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->age = $request->age;
        $data->contact_no = $request->contact_no;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->userType = $request->userType;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = User::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
}
