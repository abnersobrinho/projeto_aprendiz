<div class="card-body">
	<h3>Turmas Disponíveis</h3><br>
	@include('site.includes._filtros')
	<hr>
</div>

<div class="row">
	@foreach($turmas as $turma)
		<div class="col col-md-4 mb-5">
			<div class="card" style="min-height: 30rem;">
				@if(isset($turma->logo))
					<img width="80" height="200" class="card-img-top" src="{{ asset($turma->logo) }}" alt="Imagem de capa do card">
				@else
					<img width="80" height="200" class="card-img-top" src="{{ asset('/img/mod_slide2.jpg') }}" alt="Imagem de capa do card">
				@endif
				<div class="card-body">
					<h5 class="card-title text-secondary"><b>{{ $turma->titulo}}</b></h5>
					<small class="card-text text-secondary ">{{ $turma->descricao }}</small>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item text-uppercase text-secondary"><b>{{ $turma->tipo}}</b></li>
					<li class="list-group-item text-secondary">Projeto Aprendiz</li> <!-- projeto aprendiz ou particular -->
					<li class="list-group-item text-secondary">Gratuito</li> <!-- gratuito ou pago -->
				</ul>
				
				@if($turma->tipo === 'online')
				<div>
					<a class="btn btn-danger btn-block" href="{{ route('site.turma.show', $turma->id )}}">SABER MAIS &raquo;</a>
				</div>
				@else	
				<div>				
					<a class="btn btn-success btn-block" href="{{ route('site.turma.show', $turma->id ) }}">SABER MAIS &raquo;</a>
				</div>
				@endif
			</div>
		</div>	
	@endforeach
</div>