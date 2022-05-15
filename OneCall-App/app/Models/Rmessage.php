<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Rmessage extends Model
{
    protected $table = 'rmessage';
    protected $primaryKey = 'id';

    // A Response-message belongs to Emergency
    public function emergency(){
        return $this->belongsTo(Emergency::class);
    }
    // A Response-message belongs to Response
    public function response(){
        return $this->belongsTo(Response::class);
    }
}