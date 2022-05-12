<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $primaryKey = 'id';

    // A Status belongs to Emergency
    public function emergency(){
        return $this->belongsTo(Emergency::class);
    }
    // A Status belongs to Response
    public function response(){
        return $this->belongsTo(Response::class);
    }

}