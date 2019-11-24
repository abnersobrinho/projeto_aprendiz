@extends('layouts.adm')

@section('page_title', 'Registro')

@section('content')

	<form action="{{ route('salvar', $registro->id) }}" method="post">
	{{ csrf_field()}}

		@include('admin.usuarios._usu_site_form')

	</form>	

@endsection
