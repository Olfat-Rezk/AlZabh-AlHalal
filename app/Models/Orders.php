<?php

namespace Orders;

use Altaghize\Altaghize;
use Altaqte3\Altaqte3;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = array('quantity');

    public function altaqte3()
    {
        return $this->hasMany(Altaqte3::class);
    }

    public function altaghize()
    {
        return $this->hasMany(Altaghize::class);
    }



}
