@extends('layouts.site.adm')

@section('page_title', 'Lista de Arquivos')

@include('layouts._nav')

@section('content')       
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<!-- The fileinput-button span is used to style the file input field as button -->
				    <span class="btn btn-success fileinput-button">
				        <i class="glyphicon glyphicon-plus"></i>
				        <span>Selecionar arquivos...</span>
				        <!-- The file input field used as target for the file upload widget -->
				        <input id="fileupload" type="file" name="documento"
				        data-token="{!! csrf_token() !!}"
				        data-user-id="#">
				    </span>
				    <br>
				    <br>
				    <!-- The global progress bar -->
				    <div id="progress" class="progress">
				        <div class="progress-bar progress-bar-success"></div>
				    </div>

				    @if(Session::has('success'))
						<div class="alert alert-success">
							{!! Session::get('success') !!}
						</div>
				    @endif

				    <div class="alert alert-success hide" id="upload-success">
						Upload realizado com sucesso!
					</div>

				    <table class="table table-bordered table-striped table-hover">
				    	<thead>
				    		<tr>
				    			<th>Nome</th>
				    			<th>Enviado em</th>
				    			<th>Usuário</th>
				    			<th>Ações</th>
				    		</tr>
				    	</thead>
				    	<tbody>

				    		<tr>
				    			<td></td>
				    			<td></td>
				    			<td></td>
				    			<td>
				    				<a href="#" class="btn btn-xs btn-success">download</a>
				    				<a href="#" class="btn btn-xs btn-danger">excluir</a>
				    			</td>
				    		</tr>

				    	</tbody>
				    </table>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection

@section('scripts')
@parent
<script>
	;(function($)
	{
	  'use strict';
	  $(document).ready(function()
	  {
	  	var $fileupload     = $('#fileupload'),
	  		$upload_success = $('#upload-success');

	    $fileupload.fileupload({
	        url: '/upload',
	        formData: {_token: $fileupload.data('token'), userId: $fileupload.data('userId')},
	        progressall: function (e, data) {
	            var progress = parseInt(data.loaded / data.total * 100, 10);
	            $('#progress .progress-bar').css(
	                'width',
	                progress + '%'
	            );
	        },
	        done: function (e, data) {
	        	$upload_success.removeClass('hide').hide().slideDown('fast');

			    setTimeout(function(){
			    	location.reload();
			    }, 2000);
			}
	    });
	  });
	})(window.jQuery);
</script>
@stop

<!--
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

		DataTables Example ************************************************
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
</section> -->

