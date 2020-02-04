@extends('layouts.site.adm')

@include('layouts._nav')

@section('content')

<section class="jumbotron text-center">
	<div class="container">
		<div class="card">
			<div class="card-header"><h3 class="text-black-50">Área do {{ Auth::user()->role->nome}}</h3></div>
			<div class="row">
				<div class="col col-md-3">
					<div class="card-body">
			        	<a class="nav-link" href="{{ route('usuario.edit', auth()->user()->id )}}" style="font-size: 4em; color: lightgreen">
			            <i class="fas fa-users"></i></a>
						<h6 class="card-text text-black-50">Editar Perfil</h6>
					</div>
				</div>
				<div class="col col-md-3">
					<div class="card-body">
			        	<a class="nav-link" href="{{ route('turma.index') }}" style="font-size: 4em; color: skyblue">
			            <i class="fas fa-swatchbook"></i></a>
						<h6 class="card-text text-black-50">Minha Turma</h6>
					</div>
				</div>
			</div>

			@can('viewAny', App\Usuario::class)

			<div class="row">
				<div class="col col-md-3">
					<div class="card-body">
			        	<a class="nav-link" href="{{ route('dashboard') }}" style="font-size: 4em; color: silver">
			            <i class="fas fa-user-cog"></i></a>
						<h6 class="card-text text-black-50">Administração</h6>
					</div>
				</div>
				<div class="col col-md-3">
					<div class="card-body">
			        	<a class="nav-link" href="{{ route('curso.index') }}" style="font-size: 4em; color: hotpink">
			            <i class="fas fa-book-reader"></i></a>
						<h6 class="card-text text-black-50">Cursos</h6>
					</div>
				</div>
				<div class="col col-md-3">
					<div class="card-body">
			        	<a class="nav-link" href="#" style="font-size: 4em; color: wheat">
			            <i class="far fa-calendar-alt"></i></a>
						<h6 class="card-text text-black-50">Eventos</h6>
					</div>
				</div>
				<div class="col col-md-3">
					<div class="card-body">
			        	<a class="nav-link" href="{{ url('file') }}" style="font-size: 4em; color: wheat">
			            <i class="fas fa-file-upload"></i></a>
						<h6 class="card-text text-black-50">Arquivos</h6>
					</div>
				</div>

			@endcan	
		</div>
	</div>
</section>

<section class="my-n5">
	<div id="slide" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('img/img1.jpg')}}" alt="Primeiro Slide">
	            <div class="carousel-caption d-none d-md-block">
	                <h1 class="display-4">Culto de Abertura</h1>
	                <p class="text-light">O culto de abertura será realizado no dia 01 de março de 2020 na Igreja Cristã Maranata da Rua Benjamin Constant, 792 </p>
	            </div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('img/img3.jpg')}}" alt="Segundo Slide">
			</div>
		</div>
	</div>
</section>

@endsection