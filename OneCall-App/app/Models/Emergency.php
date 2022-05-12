<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $table = 'emergency';
    protected $primaryKey = 'id';

    // INVERSE: An Emergency has many Call
    public function call(){
        return $this->hasMany(Call::class);
    }
    // An Emergency belongs to Account
    public function account(){
        return $this->belongsTo(Account::class);
    }
    // An Emergency belongs to Response
    public function response(){
        return $this->belongsTo(Response::class);
    }
    // INVERSE: An Emergency has many Response-message
    public function rmessage(){
        return $this->hasMany(Rmessage::class);
    }
    // INVERSE: An Emergency has many Status
    public function status(){
        return $this->hasMany(Status::class);
    }
}