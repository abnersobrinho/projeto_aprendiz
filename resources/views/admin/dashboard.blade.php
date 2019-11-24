@extends('layouts.app')

@include('layouts._nav')

@section('content')

<div id="slide" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			@if(isset($evento->imagem))
				<img class="d-block w-100" height="400px" src="{{ asset($evento->imagem) }}" alt="Primeiro Slide">
			@else
				<img class="d-block w-100" height="400px" src="{{ asset('/img/logo.png') }}" alt="Primeiro Slide">
			@endif
			<div class="carousel-caption d-none d-md-block">
				@if(isset($evento->titulo))
					<h1 class="display-1"> {{ $evento->titulo }} </h1>
				@endif
				@if(isset($evento->descricao))
					<h2><p class="card-text">{{ $evento->descricao }}</p></h2>
				@endif
				<a href="#" class="btn btn-primary">Saiba mais...</a>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" height="400px" src="{{ asset('/img/logo_50_anos.jpg') }}" alt="Primeiro Slide">
			<div class="carousel-caption d-none d-md-block">
				<h1 class="display-1"></h1>
				<h2><p class="card-text"></p></h2>
				<a href="#"></a>
			</div>
		</div>
	</div>
</div>

<div class="card-content">
	<div class="card-body">
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#turmas" role="tab" aria-controls="pills-home" aria-selected="true">Turmas</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#graficos" role="tab" aria-controls="pills-home" aria-selected="false">Gráficos</a>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">				
		<div class="tab-pane fade" id="turmas" role="tabpanel" aria-labelledby="profile-tab">
			<p>
				Duis id metus enim, sed dignissim magna. Quisque dapibus pulvinar diam eget adipiscing. Ut aliquet ipsum quis lorem elementum lacinia. Vestibulum feugiat ultrices orci, vel sollicitudin nibh rutrum eu. In gravida tincidunt ornare. Aenean vestibulum leo eu orci egestas semper. Proin euismod dapibus tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse rutrum purus eget lectus ultricies a consectetur ante laoreet. Phasellus ullamcorper gravida risus vitae convallis. Curabitur ante lorem, faucibus in tincidunt quis, ullamcorper at lectus. Fusce fermentum blandit varius. Donec a quam id massa bibendum commodo sit amet vel felis. Sed magna nibh, convallis nec dignissim non, vestibulum adipiscing ipsum. Mauris cursus fringilla tortor eu feugiat. Vivamus vestibulum dapibus justo, porttitor luctus nisi posuere at. Nunc mi elit, suscipit id venenatis at, suscipit nec purus. Donec malesuada fringilla tempor. Pellentesque vehicula diam a magna commodo sagittis. Nulla facilisi. 
			</p>
		</div>

		<div class="tab-pane fade" id="graficos" role="tabpanel" aria-labelledby="contact-tab">
	 		<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin augue erat, ullamcorper pulvinar malesuada ultricies, mollis non magna. Curabitur quis nisi ut ligula ultricies gravida. Suspendisse elit justo, vulputate in facilisis sed, tristique id nisi. Maecenas risus quam, suscipit eu vehicula ut, ultricies in neque. Donec gravida tristique turpis ut interdum. Donec lacinia nisi id enim lacinia sit amet facilisis est ullamcorper. Curabitur ipsum libero, sollicitudin nec rhoncus quis, congue non ipsum. Etiam at eros dolor. Mauris non erat vitae leo faucibus fermentum. In consectetur, diam eget faucibus dignissim, urna justo pretium dui, nec eleifend neque velit vitae odio. Nam et tristique turpis. In dictum commodo sem ut dignissim. In convallis quam non tortor posuere sed ornare nulla pulvinar. Suspendisse placerat turpis in tortor rutrum nec mollis nulla posuere. Integer tellus est, rhoncus ut sagittis eget, mattis a velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque gravida posuere orci nec ornare. Donec elit nulla, aliquam eget cursus a, commodo sed odio.
			</p>
		</div>
	</div>
	</div>
</div>

@endsection


