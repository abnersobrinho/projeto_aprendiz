@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Lista de Usuários')

@section('content')

<div class="container">
<div class="card card-default">
	<div class="card-body">
		<a href="{{ route('registrar') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><i class="material-icons">add</i></a>

		<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><i class="material-icons">print</i></a>
	</div>

	<div class="card-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="d-none d-lg-block">Id</th>
					<th>Nome</th>
					<th class="d-none d-lg-block">CPF</th>
					<th>E-mail</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td class="d-none d-lg-block">{{ $registro->id }}</td>
					<td>{{ $registro->nome }}</td>
					<td class="d-none d-lg-block">{{ $registro->cpf }}</td>
					<td>{{ $registro->email }}</td>
					<td>
						@can('update', App\Usuario::class)
							<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('usuario.edit', $registro->id) }}"><i class="material-icons">edit</i></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="#"><i class="material-icons">delete</i></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('usuario.show', $registro->id) }}"><i class="material-icons">visibility</i></a>
						@endcan
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>

@endsection