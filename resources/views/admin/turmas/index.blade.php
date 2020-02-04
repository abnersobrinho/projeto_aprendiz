@extends('layouts.site.adm')

@include('layouts._nav')

@section('page_title', 'Turmas Cadastradas')

@section('content')


<section class="jumbotron mt-n5">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home') }}">:: Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Turmas</li>
		</ol>

		<div class="card">
			<div class="card-header">
				<div class="row">
					<h3 class="col text-black-50"><i class="fas fa-book"></i>  @yield('page_title')</h3>
					<div class="col text-md-right">
						<a href="{{ route('turma.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar registro"><i class="fas fa-plus"></i></a>

						<a href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Imprimir"><i class="fas fa-print"></i> </a>
					</div>
				</div>
			</div>

			<div class="card-body">
				@foreach($registros as $registro)

				<div class="card m-3">
					<div class="card-header">
						{{ $registro->titulo }}
							<a class="tooltipped float-right btn-sm btn-danger" data-position="bottom" data-tooltip="Fale com o monitor" href="{{ route('turma.show', $registro->id) }}"><span data-feather="eye"></span>  FALE COM O MONITOR</a>
					</div>
					<div class="card-body">
						<!-- INICIO DO TAB -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Informações</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="file-tab" data-toggle="tab" href="#files" role="tab" aria-controls="file" aria-selected="false">Arquivos</a>
							</li>
						</ul>

						<!-- CONTEUDO DO TAB -->
						<div class="tab-content" id="myTabContent">
							<!-- ABA INFORMAÇÕES -->
							<div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
								<h1>Informações do cursos</h1>
								<p class="card-title"><b>Previsão de início das aulas: </b>{{ $registro->datain }} <br><b>Previsão de término: </b>{{ $registro->datafim }}
								<br><b>Monitor: </b>{{ $registro->usu_nome }}
								<br><b>Telefone do monitor: </b>{{ $registro->usu_celular }}
								<br><b>Dia das aulas: </b>{{ $registro->dia }}
								<br><b>Local das aulas: </b>{{ $registro->local }}
								<p class="card-text">{{	$registro->informacoes }}</p>
								<h5>Veja no mapa abaixo o local onde será realizado as aulas presenciais.</h5>
								<div class="embed-responsive embed-responsive-16by9">
										{!! $registro->mapa !!}
								</div>
							</div>
							<!-- FIM ABA INFORMAÇÕES -->

							<!-- ABA ARQUIVOS -->
							<div class="tab-pane fade" id="files" role="tabpanel" aria-labelledby="file-tab">
								<div class="container">
									<h1>Arquivos</h1>
							    @if (count($errors) > 0)
					        <div class="alert alert-danger">
				            <strong>Desculpe!</strong> Houve um problema ao adicionar o arquivo.<br><br>
				            <ul>
			                @foreach ($errors->all() as $error)
	                    <li>{{ $error }}</li>
			                @endforeach
				            </ul>
					        </div>
							    @endif

							    @if(session('success'))
					        <div class="alert alert-success">
				            {{ session('success') }}
					        </div> 
							    @endif

							    <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
					        {{csrf_field()}}
										<div class="input-group">
										  <div class="input-group-prepend">
										    <span class="input-group-text" id="inputGroupFileAddon01">Envio</span>
										  </div>
										  <div class="custom-file">
										    <input type="file" class="custom-file-input" id="inputGroupFile01"
										      aria-describedby="inputGroupFileAddon01">
										    <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
										  </div>
										</div>



										<div class="input-group">
										  <div class="custom-file">
										    <input type="file" class="custom-file-input" name="filenames[]" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
										    <label class="custom-file-label" for="inputGroupFile04">Escolher arquivo</label>
										  </div>
										  <div class="input-group-append">
										    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"><i class="fas fa-plus"></i>   Adicionar</button>
										  </div>
										</div>
							    </form>        

									@foreach($files as $file)
									<div class="row">
										<div class="col col-1">
											<img class="img-rounded" src="https://via.placeholder.com/30">
										</div>
										<div class="col col-10">
											{{ $file->filenames }}
										</div>
									</div>
									@endforeach
								</div>
							</div>
							<!-- FIM ABA ARQUIVOS -->
						</div>  
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer text-muted">
			<div class="row">
				<div class="col">
					@if($registro->publicar === 'n')
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="publicar" id="inlineRadio3" value="opcao3" disabled>
						<label class="form-check-label" for="inlineRadio3">Publicar?</label>
					</div>
					@elseif($registro->publicar === 's')
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="publicar" id="inlineRadio3" value="opcao3" checked disabled>
						<label class="form-check-label" for="inlineRadio3">Publicar?</label>
					</div>
					@endif
				</div>

				<div class="col text-md-right">
					<a class="tooltipped" data-position="bottom" data-tooltip="Fale com o monitor" href="{{ route('turma.show', $registro->id) }}"><span data-feather="eye"></span></a>
					<a class="tooltipped" data-position="bottom" data-tooltip="Editar registro" href="{{ route('turma.edit', $registro->id) }}"><span data-feather="edit"></span></a>
					<a class="tooltipped" data-position="bottom" data-tooltip="Apagar registro" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('turma.destroy', $registro->id) }}' }"><span data-feather="trash-2"></span></a>
				</div>
			</div>
		</div>
	</div>			
	@endforeach
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-success").click(function(){ 
            var lsthmtl = $(".clone").html();
            $(".increment").after(lsthmtl);
        });

        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".hdtuto control-group lst").remove();
        });
    });
</script>

@endsection