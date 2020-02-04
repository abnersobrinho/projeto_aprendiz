@extends('layouts.admin.adm')

@include('layouts._nav')

@section('page_title', 'Editar Igreja')

@section('content')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('igreja.index') }}">Lista de igrejas</a></li>
	<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>

<form class="needs-validation" novalidate action="{{ route('igreja.update', $registro->id) }}" method="put" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="card card-default">
		<div class="card-body">
			@include('admin.igrejas._form')	
			<div class="form-group">
				<label for="pastor_id" class="control-label text-md-right"><b>Selecione o pastor desta igreja</b></label>
				<select multiple class="form-control" name="pastor_id[]" required>
					@foreach($pastores as $pastor)
					<option value="{{ $pastor->id }}"
						@foreach($registro->pastores as $m)
							@if($pastor->id == $m->id) selected="selected" @endif
						@endforeach>
						{{ $pastor->nome }}
					</option>
						@endforeach
				</select>
			</div>
		</div>			
		<div class="card-body">	
			<button type="submit" class="btn btn-primary">Atualizar</button>
			<a class="btn btn-secondary" href="{{ route('igreja.index') }}">Voltar</a>
		</div>
	</div>	
</form>
@endsection