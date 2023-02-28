<?php

namespace Cart;

use Illuminate\Database\Eloquent\Model;
use products\Products;
use User\User;

class Cart extends Model
{

    protected $table = 'cart';
    public $timestamps = true;

    public function products()
    {
       return $this->belongsToMany(Products::class);
    }
    public function users()
    {
       return $this->belongsToMany(User::class);
    }

}
