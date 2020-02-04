@extends('layouts.admin.adm')

@section('page_title', 'Adicionar Cidade')

@include('layouts._nav')

@section('content')

@include('admin.includes.alerts')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('cidade.index') }}">Lista de cidades</a></li>
	<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>


<form class="needs-validation" novalidate action="{{ route('cidade.store') }}" method="post" >
{{ csrf_field()}}
	<div class="card card-default mb-3">
		<div class="card-header">
			<h4><i class="fas fa-city"></i>  @yield('page_title')</h4>
		</div>
		<div class="card-body">
			@include('admin.cidades._form')	
		</div>			
		<div class="card-body">
			<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="modalMsg">Adicionar</button>
		    <a class="btn btn-secondary" href="{{ route('cidade.index') }}">Voltar</a>
		</div>
	</div>	
</form>

@endsection