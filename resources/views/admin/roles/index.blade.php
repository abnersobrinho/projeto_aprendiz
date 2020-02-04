@extends('layouts.admin.adm')

@section('page_title', 'Lista de Funções')

@include('layouts._nav')

@section('content')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item active" aria-current="page">Funções</li>
</ol>

<div class="row mb-3">
	<div class="col-sm-10 d-none d-lg-block">
		<h4><i class="fas fa-file-signature"></i>  @yield('page_title')</h4>
	</div>

	<div class="col-sm-2">
		<a href="{{ route('role.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><span data-feather="plus-circle"></span></a>

		<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><span data-feather="printer"></span> </a>
	</div>
</div>

<!-- DataTables Example ************************************************-->
<div class="card mb-3">
	<div class="card-body">
		<div class="table-responsive">
		  	<table class="table table-bordered table-striped" id="tabela" width="100%" cellspacing="0">
				<thead class="thead-dark">
					<tr>
						<th width="75">Ação</th>
						<th width="50">Id</th>
						<th>Nome</th>
						<th>Descrição</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
					<tr>
						<td>
							<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('role.edit', $registro->id) }}"><span data-feather="edit"></span></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('role.destroy', $registro->id) }}' }"><span data-feather="trash-2"></span></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('role.show', $registro->id) }}"><span data-feather="eye"></span></a>
						</td>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->nome }}</td>
						<td>{{ $registro->descricao }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection