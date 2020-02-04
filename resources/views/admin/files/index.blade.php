@extends('layouts.site.adm')

@section('page_title', 'Lista de Arquivos')

@include('layouts._nav')

@section('content')

<section class="jumbotron mt-n5">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Arquivos</li>
		</ol>

		<div class="row mb-3">
			<div class="col-sm-10 d-none d-lg-block">
				<h4><i class="fas fa-users"></i>  @yield('page_title')</h4>
			</div>

			<div class="col-sm-2">
				<a href="{{ url('file/create') }}" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="right" title="Adicionar arquivo"><span data-feather="plus-circle"></span></a>
			</div>
		</div>

		<!-- DataTables Example ************************************************-->
		<div class="card mb-3">
			<div class="card-body">
				<div class="table-responsive">
		          	<table class="table table-borderless" id="tabela" width="100%" cellspacing="0">
						<tbody>
							@foreach($registros as $registro)
							<tr>
								<td align="center">{!! $registro->icone !!}</td>
								<td>{{ $registro->filenames }}</td>
							
								<td>
									<a class="tooltipped float-right" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse arquivo?')){ window.location.href = '{{ route('file.destroy', $registro->id) }}' }"><span data-feather="trash-2"></span></a>

									<a class="tooltipped float-right" data-position="bottom" data-tooltip="Visualizar registro" href="{{ route('file.download', $registro->id) }}"><span data-feather="download"></span></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
	@endsection