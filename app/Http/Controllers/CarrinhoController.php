<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Produto;

class CarrinhoController extends Controller
{
	public function index() {
		return view('carrinho');
	}

    public function adicionar_produto($id) {
    	$produto = Produto::find($id);

    	Cart::add($produto -> id, $produto -> nome, 1, $produto -> preco);

    	return redirect() -> back();
    }

    public function apagar_produto($id) {
    	$item = Cart::get($id);
    	Cart::remove($id);

    	if($item -> qty > 1)
    		Cart::add($item -> id, $item -> name, $item -> qty - 1, $item -> price);

    	return redirect() -> back();
    }
}
