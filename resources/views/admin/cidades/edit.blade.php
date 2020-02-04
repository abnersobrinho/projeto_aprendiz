@extends('layouts.admin.adm')

@section('page_title', 'Editar Cidade')

@include('layouts._nav')

@section('content')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('cidade.index') }}">Lista de cidades</a></li>
	<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>

<form class="needs-validation" novalidate action="{{ route('cidade.update', $registro->id) }}" method="put">
{{ csrf_field() }}
	<div class="card card-default">
		<div class="card-header">
			<h4><i class="fas fa-city"></i>  @yield('page_title')</h4>
		</div>
		<div class="card-body">
			@include('admin.cidades._form')	
		</div>			
		<div class="card-body">	
			<button type="submit" class="btn btn-primary">Atualizar</button>
			<a class="btn btn-secondary" href="{{ route('cidade.index') }}">Voltar</a>
		</div>
	</div>	
</div>

</form>
@endsection