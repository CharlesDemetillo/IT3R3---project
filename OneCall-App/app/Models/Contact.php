<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';

    // INVERSE: An Contact has many Contact-message
    public function cmessage(){
        return $this->hasMany(Cmessage::class);
    }
    // A Contact belongs to Account
    public function account(){
        return $this->belongsTo(Account::class);
    }

}