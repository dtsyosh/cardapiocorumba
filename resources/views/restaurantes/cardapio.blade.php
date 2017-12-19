@extends('templates.master')

@section('title', 'Restaurante')


@section('content')

	<div class="row">
		
		@foreach($produtos as $produto)
			<div class="col s4 m6">
				<div class="card horizontal">
						
				  <div class="card-stacked">
				    <div class="card-content">
				      <span class="card-title">{{ $produto -> nome }}</span>
				      <p>{{ $produto -> descricao }}</p>
				    </div>
				    <div class="card-action">
				    	
				      <a href="{{ URL::to('/')}}/adicionar-produto/{{ $produto -> id }}" >Adicionar ao Carrinho</a>
				    	
				    </div>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
	<h1>{{ Cart::subtotal() }}</h1>
@endsection