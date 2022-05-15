<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $table = 'call';
    protected $primaryKey = 'id';

    // A Call belongs to Account
    public function account(){
        return $this->belongsTo(Account::class);
    }
    // A Call belongs to Emergency
    public function emergency(){
        return $this->belongsTo(Emergency::class);
    }
    
}