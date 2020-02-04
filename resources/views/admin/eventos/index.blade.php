@extends('layouts.admin.adm')

@section('page_title', 'Lista de Eventos')

@include('layouts._nav')

@section('content')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item active" aria-current="page">Eventos</li>
</ol>

<div class="row mb-3">
	<div class="col-sm-10 d-none d-lg-block">
		<h4><i class="fas fa-calendar"></i>  @yield('page_title')</h4>
	</div>
	<div class="col-sm-2">
		<a href="{{ route('evento.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><span data-feather="plus-circle"></span></a>

		<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><span data-feather="printer"></span> </a>
	</div>
</div>

	<!--	<div class="col-sm-8 d-none d-lg-block">
            <form class="form-row my-2 my-lg-0" align="right" action="{{ route('evento.buscar')}}" method="post">
            	{{ csrf_field()}}
                <input class="form-control col-md-4 mr-sm-2" type="search" name="titulo" placeholder="Título do evento..." aria-label="Pesquisar">
                <input class="form-control col-md-4 mr-sm-2" type="search" name="descricao" placeholder="Descrição do evento..." aria-label="Pesquisar">
                <input class="form-control col-md-2 mr-sm-2" type="date" name="data" placeholder="Data" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ok</button>
            </form>
        </div> -->

<!-- DataTables Example ************************************************-->
<div class="card mb-3">
	<div class="card-body">
		<div class="table-responsive">
	      	<table class="table table-bordered" id="tabela" width="100%" cellspacing="0">
		        <thead class="thead-dark">
		          	<tr>
						<th>Ação</th>
						<th>Id</th>
						<th>Título</th>
						<th>Descrição</th>
						<th>Data</th>
						<th>Publicar?</th>
						<th>Ordem</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
					<tr>
						<td>
							<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('evento.edit', $registro->id) }}"><span data-feather="edit"></span></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('evento.show', $registro->id) }}"><span data-feather="eye"></span></a>

							<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('evento.destroy', $registro->id) }}' }"><span style="color: red" data-feather="trash-2"></span></a>
						</td>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->titulo }}</td>
						<td>{{ $registro->descricao }}</td>
						<td>{{ $registro->data }}</td>
						<td>
							<div class="form-check" align="center">
								@if($registro->publicar === 'n')
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="opcao1" aria-label="..." disabled>
  								@elseif($registro->publicar === 's')
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="opcao1" aria-label="..." disabled checked>
  								@endif
							</div>
						</td>
						<td>{{ $registro->ordem }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{!! $registros->links() !!}
		</div>
	</div>
</div>

@endsection