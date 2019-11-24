@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Adicionar Área')

@section('content')

@include('admin.includes.alerts')
<form class="needs-validation" novalidate action="{{ route('area.store') }}" method="post" >
	{{ csrf_field()}}
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{ route('area.index') }}">Lista de cidades</a></li>
					<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
				</ol>
			</nav>

		<div class="card card-default">
			<div class="card-body">
				@include('admin.areas._form')	
			</div>			
			<div class="card-body">
				<button type="submit" class="btn btn-primary">Adicionar</button>
			    <a class="btn btn-secondary" href="{{ route('area.index') }}">Voltar</a>
			</div>
		</div>	
	</div>
</form>

@endsection