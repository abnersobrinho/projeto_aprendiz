@extends('layouts.site.adm')

@include('layouts._nav')

@section('content')

<!-- comentários -->
	<div class="container mb-n5">
		<div class="card">
			<div class="card-body">
				@if($total === 0)
				<h5 class="card-title text-secondary">
					<small>Ninguém fez perguntas ainda...</small>
				</h5>
				@elseif($total === 1)
				<h5 class="card-title text-secondary"><small>{{$total}} Pergunta</small></h5>
				@elseif($total > 1)
				<h5 class="card-title text-secondary"><small>{{$total}} Perguntas</small></h5>
				@endif

				<div class="card-body">
					@if(Auth::check())
					<form class="needs-validation" novalidate action="{{ route('comentario.store') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field()}}							
						<div class="form-group row">
							<div class="input-group">
								<input type="text" class="form-control form-control-sm" placeholder="Faça perguntas ao seu professor" aria-label="comentario" aria-describedby="button-addon2" name="descricao">
								<div class="input-group-append">
									<button class="btn btn-outline-primary" type="submit" id="button-addon2"><i class="far fa-share-square"></i></button>
								</div>
							</div>
						</div>

						<input class="form-control" type="hidden" name="usu_id" value="{{ Auth::user()->id }}">
						<input class="form-control" type="hidden" name="usu_nome" value="{{ Auth::user()->nome }}">
						<input class="form-control" type="hidden" name="usu_avatar" value="{{ Auth::user()->avatar }}">
						<input class="form-control" type="hidden" name="usu_turma" value="{{ $turma->id }}">
					</form>
					@endif
				</div>
			</div>
		
			<div class="card-body">
				<div class="table-responsive" width="100%">
					<table class="table table-striped" width="100%" cellspacing="1">
						<tbody>
						@foreach($comentarios as $comentario)
							<tr>
								<td width="80">
									<img class="rounded-circle" widht="60" height="60" src="{{ asset($comentario->usu_avatar) }}">
								</td>
								<td>
									<div class="row"><small><b>{{ $comentario->usu_nome }}</b></small></div>
									<div class="row"><p>{{ $comentario->descricao }}</p></div>
									<div class="row">
										<small class="text-secondary">Postado em: {{$comentario->created_at}}: 
										@if($ano > 0) {{$ano}} ano atrás
											@elseif($mes > 0){{$mes}} meses atrás
												@elseif($dia > 0){{$dia}} dias atrás
													@elseif($hora > 0){{$hora}} horas atrás
												@elseif($minuto > 0){{$minuto}} minutos atrás
											@elseif($segundo > 0){{$segundo}} segundos atrás
										@endif
										</small>
											<a class="link ml-5" href="#">Responder</a>
									</div>

									<!-- enviar respostas -->
									<div class="card-body">
										<div class="card-body">
											@if(Auth::check())
											<form class="needs-validation" novalidate action="{{ route('resposta.store') }}" method="post" enctype="multipart/form-data">
											{{ csrf_field()}}							
												<div class="form-group row">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" aria-label="resposta" aria-describedby="button-addon3" name="descricao">
														<div class="input-group-append">
															<button class="btn btn-outline-primary" type="submit" id="button-addon3"><i class="far fa-share-square"></i></button>
														</div>
													</div>
												</div>

												<input class="form-control" type="hidden" name="com_id" value="{{ Auth::user()->id }}">
												<input class="form-control" type="hidden" name="com_nome" value="{{ Auth::user()->nome }}">
												<input class="form-control" type="hidden" name="com_avatar" value="{{ Auth::user()->avatar }}">
												<input class="form-control" type="hidden" name="com_turma" value="{{ $comentario->id }}">
											</form>
											@endif
										</div>
									</div>


									<div class="table-responsive" width="100%">
										<table class="table table-striped" width="100%" cellspacing="1">
											<tbody>
											@foreach($respostas as $resposta)
												<tr>
													<td width="80">
														<img class="rounded-circle" widht="40" height="40" src="{{ asset($resposta->usu_avatar) }}">
													</td>
													<td>
														<div class="row"><small><b>{{ $resposta->usu_nome }}</b></small></div>
														<div class="row"><p>{{ $resposta->descricao }}</p></div>
														<div class="row">
															<small class="text-secondary">Postado em: {{$resposta->created_at}}: 
															@if($ano > 0) {{$ano}} ano atrás
																@elseif($mes > 0){{$mes}} meses atrás
																	@elseif($dia > 0){{$dia}} dias atrás
																		@elseif($hora > 0){{$hora}} horas atrás
																	@elseif($minuto > 0){{$minuto}} minutos atrás
																@elseif($segundo > 0){{$segundo}} segundos atrás
															@endif
															</small>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					{!! $comentarios->links() !!}
				</div>
			</div>
		</div>
	</div>

@endsection