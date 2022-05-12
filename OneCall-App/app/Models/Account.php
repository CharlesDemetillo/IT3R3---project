<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'id';

    // INVERSE: An Account has many Call
    public function call(){
        return $this->hasMany(Call::class);
    }
    // INVERSE: An Account has many Contact-message
    public function cmessage(){
        return $this->hasMany(Cmessage::class);
    }
    // INVERSE: An Account has many Contact
    public function contact(){
        return $this->hasMany(Contact::class);
    }
    // INVERSE: An Account has many Emergency
    public function emergency(){
        return $this->hasMany(Emergency::class);
    }
}