<?php

namespace User;

use Cart\Cart;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'email', 'alhay', 'city');

    public function cart()
    {
       return $this->hasMany(Cart::class);
    }

}
