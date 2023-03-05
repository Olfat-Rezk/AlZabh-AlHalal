<?php

namespace Cart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use products\Products;
use User\User;

class Cart extends Model
{

    protected $table = 'cart';
    public $timestamps = true;
    protected $fillabe =array('user_id','product_id','cart_id') ;

    public function products()
    {
       return $this->belongsToMany(Products::class);
    }
    public function users()
    {
       return $this->belongsToMany(User::class)->withDefault();
    }

}
