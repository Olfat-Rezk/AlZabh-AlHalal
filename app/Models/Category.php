<?php

namespace categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';
    public $timestamps = true;
    protected $fillable = array('name', 'photo');

    public function product()
    {
        return $this->hasMany(Category::class);
    }

   


}
