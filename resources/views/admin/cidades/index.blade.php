@extends('layouts.admin.adm')

@section('page_title', 'Lista de Cidades')

@include('layouts._nav')

@section('content')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item active" aria-current="page">Cidades</li>
</ol>

<div class="row mb-3">
	<div class="col-sm-10 d-none d-lg-block">
		<h4><i class="fas fa-city"></i>  @yield('page_title')</h4>
	</div>

	<div class="col-sm-2">
		<a href="{{ route('cidade.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><i class="fas fa-plus"></i></a>

		<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><i class="fas fa-print"></i> </a>
	</div>
</div>

<!--	<div class="col-sm-8 d-none d-lg-block">
        <form class="form-row my-2 my-lg-0" align="right" action="{{ route('cidade.buscar')}}" method="post">
        	{{ csrf_field()}}
            <input class="form-control col-md-6 mr-sm-2" type="search" name="nome" placeholder="Pesquisar por cidade..." aria-label="Pesquisar">
            <input class="form-control col-md-2 mr-sm-2" type="search" name="uf" placeholder="UF..." aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ok</button>
        </form>
    </div> -->

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
						<th>Estado</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
					<tr>
						<td>
							<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('cidade.edit', $registro->id) }}"><span data-feather="edit"></span></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('cidade.show', $registro->id) }}"><span data-feather="eye"></span></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('cidade.destroy', $registro->id) }}' }"><span style="color: red" data-feather="trash-2"></span></a>

						</td>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->nome }}</td>
						<td>{{ $registro->uf }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection