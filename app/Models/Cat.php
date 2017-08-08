<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    function links()
    {
    	return $this->hasMany('App\Models\Link');
    }
}
