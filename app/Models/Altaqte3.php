<?php

namespace Altaqte3;

use Illuminate\Database\Eloquent\Model;
use Orders\Orders;

class Altaqte3 extends Model
{

    protected $table = 'altaqte3';
    public $timestamps = true;

    public function oreder()
    {
        return $this->belongsToMany(Orders::class);
    }

}
