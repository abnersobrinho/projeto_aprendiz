@extends('layouts.admin.adm')

@include('layouts._nav')

@section('page_title', 'Adicionar Curso')

@section('content')

@include('admin.includes.alerts')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('curso.index') }}">Lista de cursos</a></li>
	<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>
			
<form class="needs-validation" novalidate action="{{ route('curso.store') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field()}}
	<div class="card card-default mb-3">
		<div class="card-header">
			<h4><i class="fas fa-book"></i>  @yield('page_title')</h4>
		</div>
			<div class="card-body">
				@include('admin.cursos._form')	
			</div>			
			<div class="card-body">
				<button type="submit" class="btn btn-primary">Adicionar</button>
			    <a class="btn btn-secondary" href="{{ route('curso.index') }}">Voltar</a>
			</div>
		</div>	
	</div>
</form>

@endsection