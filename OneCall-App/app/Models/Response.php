<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'response';
    protected $primaryKey = 'id';

    // INVERSE: A Response has many Emergency
    public function emergency(){
        return $this->hasMany(Emergency::class);
    }
    // INVERSE: An Response has many Response-message
    public function rmessage(){
        return $this->hasMany(Rmessage::class);
    }
    // INVERSE: An Response has many Status
    public function status(){
        return $this->hasMany(Status::class);
    }
}