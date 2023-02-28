<?php

namespace Altaghize;

use Illuminate\Database\Eloquent\Model;
use Orders\Orders;

class Altaghize extends Model
{

    protected $table = 'altaghize';
    public $timestamps = true;
    protected $fillable = array('name');

    public function order()
    {
        return $this->belongsToMany(Orders::class);
    }

}
