@extends('templates.master')

@section('title', 'Welcome')

@section('content')

<div class="text-center">
    Cardápio Corumbá
        
    <div class="row">
    	@foreach($categorias as $categoria)
        	<div class="col s6">
                <div class="card horizontal">
                        
                    <div class="card-stacked">
                        <span class="card-title">{{ $categoria -> nome }}</span>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="/search/{{ $categoria -> nome }}">Buscar</a>
                        </div>
                    </div>
                </div>
            </div>
    	@endforeach
    </div>

</div>

@endsection