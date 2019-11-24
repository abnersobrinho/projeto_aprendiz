@extends('layouts.adm')

@include('layouts._nav')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12">
		    <div class="alert alert-danger" role="alert">Acesso Negado</div>
		</div>

		<div class="col-sm-12">
			<div class="card card-default">
				<div class="card-body">
					<h3>Você não tem permissão pra acessar este recurso..</h3>
				</div>			
				<div class="card-body">	
					<a class="btn btn-secondary" href="{{ route('dashboard') }}">Voltar</a>
				</div>
			</div>
		</div>	
	</div>
</div>

@endsection