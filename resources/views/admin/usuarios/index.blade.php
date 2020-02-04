@extends('layouts.admin.adm')

@section('page_title', 'Lista de Usuários')

@include('layouts._nav')

@section('content')


<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item active" aria-current="page">Usuários</li>
</ol>

<div class="row mb-3">
	<div class="col-sm-10 d-none d-lg-block">
		<h4><i class="fas fa-users"></i>  @yield('page_title')</h4>
	</div>

	<div class="col-sm-2">
		<a href="#" class="btn btn-primary disabled" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><span data-feather="plus-circle"></span></a>

		<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><span data-feather="printer"></span> </a>
	</div>
</div>

<!-- DataTables Example ************************************************-->
<div class="card mb-3">
	<div class="card-body">
		<div class="table-responsive">
          <table class="table table-bordered" id="tabela" width="100%" cellspacing="0">
            <thead class="thead-dark">
          		<tr>
					@can('update', App\Usuario::class)
					<th>Ação</th>	
					@endcan          			
					<th>Id</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					@can('update', App\Usuario::class)
					<td>
						<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('usuario.edit', $registro->id) }}"><span data-feather="edit"></span></a>

						<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('usuario.destroy', $registro->id) }}' }"><span data-feather="trash-2"></span></a>

						<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('usuario.show', $registro->id) }}"><span data-feather="eye"></span></a>
					</td>
					@endcan
											
					<td>{{ $registro->id }}</td>
					<td>{{ $registro->nome }}</td>
					<td>{{ $registro->cpf }}</td>
					<td>{{ $registro->email }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection