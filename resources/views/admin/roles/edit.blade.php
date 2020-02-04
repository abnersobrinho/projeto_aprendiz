@extends('layouts.admin.adm')

@include('layouts._nav')

@section('page_title', 'Editar Função')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('role.index') }}">Lista de cidades</a></li>
	<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>

<form class="needs-validation" novalidate action="{{ route('role.update', $registro->id) }}" method="put">
{{ csrf_field() }}
	<div class="card card-default">
		<div class="card-header">
			<h4><i class="fas fa-file-signature"></i>  @yield('page_title')</h4>
		</div>
		<div class="card-body">
			@include('admin.roles._form')	
		</div>			
		<div class="card-body">	
			<button type="submit" class="btn btn-primary">Atualizar</button>
			<a class="btn btn-secondary" href="{{ route('role.index') }}">Voltar</a>
		</div>
	</div>	
</div>

</form>
@endsection