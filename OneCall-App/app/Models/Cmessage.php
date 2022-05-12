<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cmessage extends Model
{
    protected $table = 'cmessage';
    protected $primaryKey = 'id';

    // A Contact-message belongs to Account
    public function account(){
        return $this->belongsTo(Account::class);
    }
    // A Contact-message belongs to Contact
    public function contact(){
        return $this->belongsTo(Contact::class);
    }
}