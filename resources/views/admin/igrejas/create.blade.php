@extends('layouts.admin.adm')

@include('layouts._nav')

@section('page_title', 'Adicionar Evento')

@section('content')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('igreja.index') }}">Lista de igrejas</a></li>
	<li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>			

<form class="needs-validation" novalidate action="{{ route('igreja.store') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field()}}
	<div class="card card-default">
		<div class="card-body">
			@include('admin.igrejas._form')	
		</div>

		<div class="card-body">
			<div class="form-group row">
				<label for="pastor_id" class="control-label col-md-2 text-md-right">
				<b>Selecione o pastor desta igreja</b></label>
				<div class="col col-md-4">
					<select multiple class="form-control" name="pastor_id[]" required> <!-- desativei a opção multiple -->
						@foreach($pastores as $pastor)
							<option value="{{ $pastor->id }}">{{ $pastor->nomecompleto}}</option>
						@endforeach
					</select>
				</div>
				<div class="col col-md-3">
					<span>Pastoreou de: </span>
					<input class="form-control" type="date" name="de" value="{{ $pastor->de }}">
				</div>
				<div class="col col-md-3">
					<span>Até: </span>
					<input class="form-control" type="date" name="ate" value="{{ $pastor->ate }}">
					
				</div>
			</div>
		</div>			
		<div class="card-body">
			<button type="submit" class="btn btn-primary">Adicionar</button>
		    <a class="btn btn-secondary" href="{{ route('igreja.index') }}">Voltar</a>
		</div>
	</div>	
</form>

@endsection