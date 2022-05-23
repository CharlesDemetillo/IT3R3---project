<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'age',
        'address',
        'contact_no',
        'email',
        'password',
        'userType',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // INVERSE: A User has many Response
    public function response(){
        return $this->hasMany(Response::class);
    }
    // INVERSE: A User has many Account
    public function account(){
        return $this->hasMany(Account::class);
    }

}
