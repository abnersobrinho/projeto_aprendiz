<div class="card-body">
	<h3>Cursos Disponíveis</h3>
	<hr>
</div>

<div class="row">
@foreach($cursos as $curso)
		<div class="card border-light col-sm-4 ml-5 mb-5 bg-transparent" style="max-width: 20rem; height: 25rem">
			@if(isset($curso->logo))
				<img height="160" witdh="80" class="card-img-top rounded-circle" src="{{ asset($curso->logo) }}" alt="Imagem de capa do card">
			@else
				<img class="card-img-top rounded-circle" src="{{ asset('/img/mod_slide2.jpg') }}" alt="Imagem de capa do card">
			@endif
			<div class="card-body bg-transparent">
				<h3 class="card-title text-capitalize"><b>{{ $curso->titulo}}</b></h3>
				<p class="card-text">{{ $curso->descricao }}</p>
			</div>
			<div class="card-footer bg-transparent">
				<a href="#" class="link">Saber mais...</a>
			</div>
		</div>	
@endforeach
</div>