@extends('layouts.admin.adm')

@section('page_title', 'Adicionar Área')

@include('layouts._nav')

@section('content')

@include('admin.includes.alerts')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('area.index') }}">Lista de áreas</a></li>
	<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>

<form class="needs-validation" novalidate action="{{ route('area.store') }}" method="post" >
	{{ csrf_field()}}
	<div class="card card-default">
		<div class="card-header">
			<h4><i class="fas fa-table"></i>  @yield('page_title')</h4>
		</div>
		<div class="card-body">
			@include('admin.areas._form')	
		</div>			
		<div class="card-body">
			<button type="submit" class="btn btn-primary">Adicionar</button>
		    <a class="btn btn-secondary" href="{{ route('area.index') }}">Voltar</a>
		</div>
	</div>
</form>

@endsection