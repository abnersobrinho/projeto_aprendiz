@extends('layouts.adm')

@section('page_title', 'Entrar no sistema')

@include('layouts._nav')

@section('content')

<div class="row justify-content-center mt-4">

		<div class="card card-center col-sm-6">
			<form class="form-horizontal" method="post" action="{{ route('logar') }}">
				{{ csrf_field() }}

			<!-- Dados de acesso -->
			<div class="card-body">				
				<div class="form-group row">
					<label for="email" class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail">
					</div>	
				</div>

				<div class="form-group row">
					<label for="senha" class="col-sm-2 control-label">Senha</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="senha" placeholder="Digite uma senha de acesso">
					</div>	
				</div>
			</div>

			<div class="card-body">
				<a href="#" class="card-link"><b>Não tenho usuário e senha</b></a>
				<a href="#" class="card-link"><b>Esqueci minha senha/usuário</b></a>
			</div>

			<hr>

			<div class="form-group col-md-6">                        
	      		<a href="{{ route('index')}}" class="btn btn-secondary">Cancelar</a>
	      		<button type="submit" class="btn btn-primary">Logar</button>
			</div>
			</form>
		</div>
</div>
	

@endsection

