<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class RestauranteController extends Controller
{
    public function escolher_restaurante() {
        return view('escolher_restaurante');
    }

    public function cardapio($id) {
    	$produtos = Produto::where('restaurante_id', '=', $id) -> get();
    	return view('restaurantes.cardapio', compact('produtos'));
    }
}
