@extends('layouts.site.adm')

@section('page_title', 'Editar Turma')

@include('layouts._nav')

@section('content')

<form class="needs-validation" novalidate action="{{ route('turma.update', $registro->id) }}" enctype="multipart/form-data">
{{ csrf_field() }}	

<section class="jumbotron">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('turma.index') }}">Turmas cadastradas</a></li>
			<li class="breadcrumb-item active" aria-current="page">Atualizar</li>
		</ol>
		<div class="card">
			<div class="card-header"><h3 class="text-black-50"><i class="fas fa-city"></i>  @yield('page_title')</h3>
			</div>
			<div class="card-body">
				@include('admin.turmas._form')	
			</div>			
			<div class="card-body">	
				<button type="submit" class="btn btn-primary">Atualizar</button>
				<a class="btn btn-secondary" href="{{ route('turma.index') }}">Voltar</a>
			</div>
		</div>
	</div>
</section>	
</form>
@endsection