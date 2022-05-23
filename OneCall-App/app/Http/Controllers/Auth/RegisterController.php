<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Account;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
        $userType = Auth::user()->userType;
        switch($userType){
            case 'admin':
                return '/admin';
                break;
            case 'userAccount':
                return '/userAccount';
                break;
            case 'responseTeam':
                return '/responseTeam';
                break;
            default:
                return '/home';
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'age' => ['required'],
            'contact_no' => ['required','integer'],
            'address' => ['required','string','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'userType' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $save_user = new User();
        $save_user->name = $data['name'];
        $save_user->age = $data['age'];
        $save_user->contact_no = $data['contact_no'];
        $save_user->address = $data['address'];
        $save_user->email = $data['email'];
        $save_user->password = Hash::make($data['password']);
        $save_user->userType = $data['userType'];
        $save_user->save();

        $data['user_id'] = $save_user->id;

        $save_account = new Account();
        $save_account->name = $data['name'];
        $save_account->user_id = $data['user_id']; //NAAY ERROR
        $save_account->age = $data['age'];
        $save_account->contact_no = $data['contact_no'];
        $save_account->address = $data['address'];
        $save_account->email = $data['email'];
        $save_account->password = Hash::make($data['password']);
        $save_account->save();

        return json_encode(
            ['success'=>true]
        );
    }

}

