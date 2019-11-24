@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Editar Curso')

@section('content')
<form class="needs-validation" novalidate action="{{ route('curso.update', $registro->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{ route('curso.index') }}">Lista de cursos</a></li>
			<li class="breadcrumb-item active" aria-current="page">Atualizar</li>
		</ol>
	</nav>
	<div class="card card-default">
		<div class="card-body">
			@include('admin.cursos._form')	
		</div>			
		<div class="card-body">	
			<button type="submit" class="btn btn-primary">Atualizar</button>
			<a class="btn btn-secondary" href="{{ route('curso.index') }}">Voltar</a>
		</div>
	</div>	
</div>

</form>
@endsection