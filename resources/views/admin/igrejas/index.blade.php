@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Lista de Igrejas')

@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Igreja</li>
		</ol>
	</nav>
</div>

<div class="container">
	<div class="card card-default">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-4">
					<a href="{{ route('igreja.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><i class="material-icons">add</i></a>

					<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><i class="material-icons">print</i></a>
				</div>

				<div class="col-sm-8">
	            <form class="form-row my-2 my-lg-0" align="right" action="{{ route('igreja.buscar')}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field()}}
	                <input class="form-control col-md-4 mr-sm-2" type="search" name="nome" placeholder="Nome da igreja..." aria-label="Pesquisar">
	                <input class="form-control col-md-4 mr-sm-2" type="search" name="cidade" placeholder="Cidade" aria-label="Pesquisar">
	                <input class="form-control col-md-2 mr-sm-2" type="search" name="bairro" placeholder="Bairro..." aria-label="Pesquisar">
	                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ok</button>
	            </form>
	        </div>
			</div>
		</div>

		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="d-none d-lg-block">Id</th>
						<th>Nome</th>
						<th class="d-none d-lg-block">Área</th>
						<th class="d-none d-lg-block">Endereço</th>
						<th>Cidade</th>
						<th>Bairro</th>
						<th class="d-none d-lg-block">Imagem</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
					<tr>
						<td class="hide-on-med-and-down">{{ $registro->id }}</td>
						<td>{{ $registro->nome }}</td>
						<td>{{ $registro->area->titulo }}</td>
						<td>{{ $registro->endereco }}</td>
						<td>{{ $registro->cidade->nome }}</td>
						<td>{{ $registro->bairro }}</td>
						<td><img width="100" src="{{ asset($registro->imagem) }}"></td>
						<td>
							<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('igreja.edit', $registro->id) }}"><i class="material-icons">edit</i></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('igreja.destroy', $registro->id) }}' }"><i class="material-icons">delete</i></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('igreja.show', $registro->id) }}"><i class="material-icons">visibility</i></a>
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