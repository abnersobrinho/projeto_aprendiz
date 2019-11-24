@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Editar Usuário')

@section('content')

<div class="container">
	<form action="{{ route('usuario.update', $registro->id) }}" method="PUT">
	{{ csrf_field()}}

	<div class="card card-default">
		<div class="card-body">
			@include('admin.usuarios._form')				
		<div class="card-body">	
			<button type="submit" class="btn btn-primary">Atualizar</button>			
			<a class="btn btn-secondary" href="{{ route('usuario.index') }}">Voltar</a>
		</div>
	</form>	
</div>

@endsection