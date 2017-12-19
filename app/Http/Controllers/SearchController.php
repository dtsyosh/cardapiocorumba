<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use App\Restaurante;
use App\Categoria;

class SearchController extends Controller
{
	public function index() {
		$categorias = Categoria::all();

		return view('welcome', compact('categorias'));
	}
    public function search($categoria) {

        $restaurantes = DB::table('restaurantes')
        	-> join('produtos', 'restaurantes.id', '=', 'produtos.restaurante_id')
        	-> join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
        	-> where('categorias.nome', '=', $categoria)
        	-> select('restaurantes.*')
        	-> get()
            -> unique();



        return view('escolher_restaurante', compact('restaurantes'));
    }
}
