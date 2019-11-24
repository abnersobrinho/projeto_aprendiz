@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Adicionar Evento')

@section('content')

@include('admin.includes.alerts')
<form class="needs-validation" novalidate action="{{ route('evento.store') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field()}}
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{ route('evento.index') }}">Lista de eventos</a></li>
					<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
				</ol>
			</nav>

		<div class="card card-default">
			<div class="card-body">
				@include('admin.eventos._form')	
			</div>			
			<div class="card-body">
				<button type="submit" class="btn btn-primary">Adicionar</button>
			    <a class="btn btn-secondary" href="{{ route('evento.index') }}">Voltar</a>
			</div>
		</div>	
	</div>
</form>

@endsection