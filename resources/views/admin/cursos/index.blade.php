@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Lista de Cursos')

@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Cursos</li>
		</ol>
	</nav>
</div>

<div class="container">
	<div class="card card-default">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-2">
					<a href="{{ route('curso.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><i class="material-icons">add</i></a>

					<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><i class="material-icons">print</i></a>
				</div>

				<div class="col-sm-10 d-none d-lg-block">
		            <form class="form-row my-2 my-lg-0" align="right" action="{{ route('curso.buscar')}}" method="post">
		            	{{ csrf_field()}}
		                <input class="form-control col-md-5 mr-sm-2" type="search" name="titulo" placeholder="Pesquisar por curso..." aria-label="Pesquisar">
		                <input class="form-control col-md-5 mr-sm-2" type="search" name="descricao" placeholder="Descrição..." aria-label="Pesquisar">
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
					<th>Título</th>
					<th class="d-none d-lg-block">Descrição</th>
					<th class="d-none d-lg-block">Logo</th>
					<th class="d-none d-lg-block">Imagem</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td class="d-none d-lg-block">{{ $registro->id }}</td>
					<td>{{ $registro->titulo }}</td>
					<td class="d-none d-lg-block">{{ $registro->descricao }}</td>
					<td class="d-none d-lg-block"><img width="100" src="{{ $registro->logo }}"></td>
					<td class="d-none d-lg-block"><img width="100" src="{{ $registro->imagem }}"></td>
					<td>
						<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('curso.edit', $registro->id) }}"><i class="material-icons">edit</i></a>

						<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('curso.destroy', $registro->id) }}' }"><i class="material-icons">delete</i></a>

						<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('curso.show', $registro->id) }}"><i class="material-icons">visibility</i></a>
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