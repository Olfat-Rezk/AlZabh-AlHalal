<?php

namespace Orders;

use Altaghize\Altaghize;
use Altaqte3\Altaqte3;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = array(
        'quantity','total-price','discount','product_id','altaghize_id'
        ,'altaqte3_id','m3_shalota');

    public function altaqte3()
    {
        return $this->hasMany(Altaqte3::class);
    }

    public function altaghize()
    {
        return $this->hasMany(Altaghize::class);
    }



}
