<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'name',
        'age',
        'address',
        'contact_no',
        'email',
        'password',
    ];

    protected $table = 'account';
    protected $primaryKey = 'id';
    
    // An Account belongs to User
    public function user(){
        return $this->belongsTo(User::class);
    }
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