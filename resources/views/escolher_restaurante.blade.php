@extends('templates.master')

@section('title', 'Escolha seu Restaurante')

@section('content')

<h4 class="center-align">Restaurantes Disponíveis</h4>


@foreach($restaurantes -> unique() as $restaurante)
	<div class="col s12 m7">
		
		<div class="card horizontal">
		  <div class="card-image">
		    <!-- <img src="https://lorempixel.com/100/190/nature/6"> -->
		  </div>
		  <div class="card-stacked">
		  	<span class="card-title">{{ $restaurante -> nome }}</span>
		    <div class="card-content">
		      <p>Taxa de entrega: {{ $restaurante -> taxa_entrega }}</p>
		      <p>CEP: {{ $restaurante -> cep }}</p>
		    </div>
		    <div class="card-action">
		      <a href="{{URL::to('/')}}/restaurante/{{$restaurante->id}}">Ver cardápio</a>
		    </div>
		  </div>
		</div>
	</div>
@endforeach

@endsection