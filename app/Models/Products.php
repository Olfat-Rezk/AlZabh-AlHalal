<?php

namespace products;

use Cart\Cart;
use categories\Category;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = array('name', 'photo', 'price');
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function categories(){
        return $this->belongsTo(Category::class);
    }

}
