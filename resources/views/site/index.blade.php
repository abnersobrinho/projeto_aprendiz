@extends('layouts.site.adm')

@include('layouts._nav')

@include('layouts._slide')

@section('content')

<div class="container ">
    <div class="row featurette">
        <div class="col-md-7">
            @if(Auth::check())
                <h2 class="featurette-heading">Avisos importantes <span class="text-muted">Serão colocados aqui!</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <a href="#" class="btn btn-primary">SABER MAIS...</a>
            @else
                <h2 class="featurette-heading">Venha fazer parte deste projeto. <span class="text-muted">Cadastre-se, já!</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <a href="{{ route('site.usuario.create') }}" class="btn btn-primary">QUERO ME CADASTRAR</a>
            @endif
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/venha-tocar.svg')}}" alt="imagem svg venha-tocar">
        </div>
    </div>
    <hr class="featurette-divider">
</div>


<div class="container">
    @include('site.includes._cursos')
</div>

@endsection