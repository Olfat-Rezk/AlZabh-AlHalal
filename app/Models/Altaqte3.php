<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orders\Orders;

class Altaqte3 extends Model
{

    protected $table = 'altaqte3';
    public $timestamps = true;
    protected $fillable = array('name');

    public function oreder()
    {
        return $this->belongsToMany(Orders::class);
    }

}
