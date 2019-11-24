@extends('layouts.adm')

@section('content')


<div class="container">
	<div class="card-panel">
	<h5 class="left blue-grey-text lighten-2">::Excluir Cidades</h5>
		<br><br>	
		<div class="row">
			<form method="post" action="{{route ('cidade.destroy', $cidade->id)}}">
	        <input type="hidden" name="_method" value="DELETE">
	        {{ csrf_field() }}	
				<dl class="row">
					<dt class="col s12 m12"><h6 class="red-text">Tem certeza que deseja remover a cidade?</h6></dt>
					<dt class="col s3 m2">Código: </dt>
					<dd class="col s9 m10"><b>{{$registro->id}}</b></dd>
					<dt class="col s3 m2">Nome: </dt>
					<dd class="col s9 m10"><b>{{$cidade->nome}}</b></dd>
					<dt class="col s3 m2">UF: </dt>
					<dd class="col s9 m10"><b>{{$cidade->uf}}</b></dd>
				</dl>	
			<button class="btn blue"><i class="white-text mdi mdi-delete mdi-24px"></i>Remover</button>
			<a class="btn" href="javascript:history.back()"><i class="white-text mdi mdi-chevron-double-left mdi-24px"></i></a>
			<span></span>
		</form>
		</div>
	</div>
</div>
@endsection