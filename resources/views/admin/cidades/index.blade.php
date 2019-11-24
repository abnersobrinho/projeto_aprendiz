@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Lista de Cidades')

@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Cidades</li>
		</ol>
	</nav>
</div>

<div class="container">
	<div class="card card-default">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-4">
					<a href="{{ route('cidade.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><i class="material-icons">add</i></a>

					<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><i class="material-icons">print</i></a>
				</div>

				<div class="col-sm-8">
	            <form class="form-row my-2 my-lg-0" align="right" action="{{ route('cidade.buscar')}}" method="post">
	            	{{ csrf_field()}}
	                <input class="form-control col-md-6 mr-sm-2" type="search" name="nome" placeholder="Pesquisar por cidade..." aria-label="Pesquisar">
	                <input class="form-control col-md-2 mr-sm-2" type="search" name="uf" placeholder="UF..." aria-label="Pesquisar">
	                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ok</button>
	            </form>
	        </div>
			</div>
		</div>

		<div class="card-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="hide-on-med-and-down">Id</th>
					<th>Nome</th>
					<th>Estado</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td class="hide-on-med-and-down">{{ $registro->id }}</td>
					<td>{{ $registro->nome }}</td>
					<td>{{ $registro->uf }}</td>
					<td>
						<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('cidade.edit', $registro->id) }}"><i class="material-icons">edit</i></a>

						<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('cidade.destroy', $registro->id) }}' }"><i class="material-icons">delete</i></a>

						<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('cidade.show', $registro->id) }}"><i class="material-icons">visibility</i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		{!! $registros->links() !!}

	</div>
</div>
</div>

@endsection