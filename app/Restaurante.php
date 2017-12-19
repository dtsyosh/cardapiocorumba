<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    public function produtos() {

    	return $this -> hasMany('App\Produto');
    }
}
