@extends('layouts.site.adm')

@include('layouts._nav')

@section('content')

<section class="jumbotron text-center">
	<div class="container">
		<div class="card">
			<div class="alert alert-danger" role="alert">
				<h3 class="text-black-50">Acesso negado</h3>
			</div>			
					
			<div class="col-sm-12">
				<span>Você não tem permissão pra acessar este recurso..</span>		
				<div class="card-body">	
					<a class="btn btn-secondary" href="{{ route('home') }}">Voltar</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection