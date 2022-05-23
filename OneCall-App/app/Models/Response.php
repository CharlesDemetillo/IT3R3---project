<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'response';
    protected $primaryKey = 'id';

    // A Response belongs to User
    public function user(){
        return $this->belongsTo(User::class);
    }
    // INVERSE: A Response has many Emergency
    public function emergency(){
        return $this->hasMany(Emergency::class);
    }
    // INVERSE: A Response has many Response-message
    public function rmessage(){
        return $this->hasMany(Rmessage::class);
    }
    // INVERSE: A Response has many Status
    public function status(){
        return $this->hasMany(Status::class);
    }
}