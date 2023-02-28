<?php

namespace Admin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model 
{

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('name', 'role');

}