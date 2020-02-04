@extends('layouts.site.adm')

@include('layouts._nav')

@section('page_title', 'Lista de Cursos')

@section('content')

<div class="jumbotron mt-n5">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home') }}">:: Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Cursos</li>
		</ol>
		<div class="card">
			<div class="card-header">
				<div class="row">
					<h3 class="col text-black-50"><i class="fas fa-book"></i>  @yield('page_title')</h3>
					<div class="col text-md-right">
						<a href="{{ route('curso.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><i class="fas fa-plus"></i></a>

						<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><i class="fas fa-print"></i> </a>
					</div>
				</div>
			</div>

			<div class="card-body">
				@foreach($cursos as $curso)
				<div class="card m-3">
					<div class="card-header">
						{{ $curso->titulo }}
					</div>
					<div class="card-body">
						<h5 class="card-title">{{ $curso->descricao }}</h5>
						<p class="card-text">{{	$curso->informacoes }}</p>
					</div>
					<div class="card-footer text-muted">
						<div class="row">
							<div class="col">
								@if($curso->publicar === 'n')
								<div class="form-check form-check-inline">
			  						<input class="form-check-input" type="checkbox" name="publicar" id="inlineRadio3" value="opcao3" disabled>
			  						<label class="form-check-label" for="inlineRadio3">Publicar?</label>
								</div>
								@elseif($curso->publicar === 's')
								<div class="form-check form-check-inline">
			  						<input class="form-check-input" type="checkbox" name="publicar" id="inlineRadio3" value="opcao3" checked disabled>
			  						<label class="form-check-label" for="inlineRadio3">Publicar?</label>
								</div>
								@endif
							</div>

							<div class="col text-md-right">
								<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('curso.edit', $curso->id) }}"><span data-feather="edit"></span></a>
								<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('curso.destroy', $curso->id) }}' }"><span data-feather="trash-2"></span></a>
							</div>
						</div>
					</div>
				</div>			
				@endforeach
			</div>
		</div>
		{!! $cursos->links() !!}
	</div>
</div>

@endsection



