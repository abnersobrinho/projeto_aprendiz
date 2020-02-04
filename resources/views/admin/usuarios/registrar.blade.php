@extends('layouts.site.adm')

@include('layouts._nav')

@section('page_title', 'Registrar')

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
	Abrir modal de demonstração
</button>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-users"></i>@yield('page_title')</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
			</div>
		
			<div class="modal-body">
				<form action="{{ route('usuario.store') }}" method="POST">
				{{ csrf_field()}}
					@include('admin.usuarios._form')
			</div>			
					
			<div class="modal-footer">							
				<button type="submit" class="btn btn-primary">Registrar</button>	
				<button type="reset" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>
			
@endsection
