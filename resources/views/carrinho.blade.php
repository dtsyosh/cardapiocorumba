@extends('templates.master')

@section('title', 'carrinho')

@section('content')


<h3>Carrinho</h3>
<table>
	<thead>
		<tr>
			<td>Nome</td>
			<td>Quantidade</td>
			<td>Preço</td>
			<td>Ações</td>
		</tr>
	</thead>

	<tbody>
		@foreach(Cart::content() as $produto)
			<tr>		
				<td>{{ $produto -> name }}</td>
				<td>{{ $produto -> qty}}</td>
				<td>{{ $produto -> price }}</td>
				<td><a href="{{URL::to('/')}}/apagar-produto/{{ $produto -> rowId }}" class="material-icons">delete</a>
			</tr>
		@endforeach	
	</tbody>
</table>


<h3>Total: {{ Cart::subtotal() }}</h3>
@endsection