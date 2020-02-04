@extends('layouts.site.adm')

@include('layouts._nav')

@section('content')

<div class="container-fluid">
<div id="slide" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img class="d-block w-100" src="{{ asset($curso->imagem)}}" alt="Primeiro Slide">
  		  	<div class="carousel-caption d-none d-md-block">
    			<h1 class="display-4">{{ $curso->titulo }}</h1>
    			<p class="text-light">{{ $curso->descricao }}</p>
    			@if(Auth::guest())
    				<a class="btn btn-info text-md-end" href="{{ route('site.usuario.create') }}" role="button">QUERO ME CADASTRAR</a>
    			@else
    				<a class="btn btn-danger text-md-end" href="#" role="button">ENCONTRE SUA TURMA</a>
    			@endif
  			</div>
    	</div>
    </div>
</div>
</div>


<!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="section">
	<div class="card-body row">
		<div class="col-md-9 col-sm-12">
			<div class="embed-responsive embed-responsive-21by9">
			  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
			</div>
		</div>

		<div class="col-md-3 col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h5>Opções de pagamento</h5>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><i class="fas fa-book-open text-secondary"></i>    0 Aulas</li>
						<li class="list-group-item"><i class="fas fa-certificate text-secondary"></i>    0 Certificado</li>
						<li class="list-group-item bg-light"><a class="btn btn-primary btn-block" href="#">Assine Já</a><p class="text-md-center"><small class="text-secondary">Conheça outras cursos da plataforma</small></p></li>
						<li class="list-group-item"><img class="img-fluid" src="{{ asset('img/Bandeiras-Cartões.png') }}"><p class="text-md-center"><small class="text-secondary"><b>PARCELE EM ATÉ 10x</b></small></p></li>
					</ul>
				</div>	
			</div>	
		</div>
	</div>
</section>



<!-- Informações -->
<section class="container pt-5">
	<div class="card bg-light border">
		<div class="card-body">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-sobre-tab" data-toggle="pill" href="#pills-sobre" role="tab" aria-controls="pills-sobre" aria-selected="true">Sobre o Curso</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-publico-tab" data-toggle="pill" href="#pills-publico" role="tab" aria-controls="pills-publico" aria-selected="false">Público Alvo</a>
				</li>
			</ul>

			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-sobre" role="tabpanel" aria-labelledby="pills-sobre-tab">
					<h2>SOBRE O CURSO</h2>
					<p>{{ $curso->informacoes }}</p>
				</div>
				<div class="tab-pane fade" id="pills-publico" role="tabpanel" aria-labelledby="pills-publico-tab">
					<h2>PUBLICO ALVO</h2>
					<p>{{ $curso->publico }}</p>
				</div>
			</div>
		</div>
	</div>
</section> <!-- informações -->


<!-- TURMAS -->
<section class="container py-5">
	<h3 class="text-black-50">Escolha uma turma abaixo e faça a sua matrícula.<br><small>(Necessário estar registrado no sistema)</small></h3>
	<div class="card bg-light">
		<div class="row">
			<div class="col col-md-3 video-responsive embed-responsive-1by1 text-md-center">
				<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.015850607648!2d-41.969160686013396!3d-18.88637798719696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb1a62f29640401%3A0xf80e8e97f8803911!2sIgreja%20Crist%C3%A3%20Maranata!5e0!3m2!1spt-BR!2sbr!4v1580260673676!5m2!1spt-BR!2sbr" width="250" height="250" frameborder="1" style="border:1;" allowfullscreen=""></iframe>
				<strong>Mapa do local das aulas</strong>
			</div>
			<div class="card-body col col-md-8 ml-3">
				<h5 class="card-title">Nome da Turma</h5>
				<p class="card-text">Informações sobre a turma.<br>
				Local das aulas</p>
				@if(Auth::guest())
					<a href="#" class="btn btn-primary">QUERO ME CADASTRAR</a>
				@else
					<a href="#" class="btn btn-primary">MATRICULAR NESTA TURMA</a>
				@endif
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col col-md-1 text-md-center">
				<a class="link d-block h-100" href="#"><i class="fas fa-chevron-left"></i></a>
			</div>

			<div class="col col-md-10">
				<div class="row pt-5">
					<div class="col col-md-2" align="center">
						<img class="d-block rounded-circle" src="https://via.placeholder.com/60x60?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
						<p>Aluno 1</p>
					</div>
					<div class="col col-md-2" align="center">
						<img class="d-block rounded-circle" src="https://via.placeholder.com/60x60?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
						<p>Aluno 2</p>
					</div>
					<div class="col col-md-2" align="center">
						<img class="d-block rounded-circle" src="https://via.placeholder.com/60x60?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
						<p>Aluno 3</p>
					</div>
					<div class="col col-md-2" align="center">
						<img class="d-block rounded-circle" src="https://via.placeholder.com/60x60?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
						<p>Aluno 4</p>
					</div>
					<div class="col col-md-2" align="center">
						<img class="d-block rounded-circle" src="https://via.placeholder.com/60x60?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
						<p>Aluno 5</p>
					</div>
					<div class="col col-md-2" align="center">
						<img class="d-block rounded-circle" src="https://via.placeholder.com/60x60?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
						<p>Aluno 6</p>
					</div>
				</div>
				<p class="text-md-center"><strong>Alunos já matriculados nesta turma</strong></p>
			</div>
			<div class="col col-md-1 text-md-center">
				<a class="link d-block h-100" href="#"><i class="fas fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>

<!-- fim alunos matriculados -->

@endsection