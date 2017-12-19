<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categorias() {

    	return $this -> hasOne('App\Categoria');
    }

    public function restaurantes() {

    	return $this -> belongsTo('App\Restaurante');
    }
}
