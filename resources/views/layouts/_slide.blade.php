<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" height="400" src="{{ asset('images/violino_slide.jpg')}}" alt="Primeiro Slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4">Projeto Aprendiz 2020</h1>
                <p class="text-light">Região de Gov. Valadares-MG</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="400" src="{{ asset('images/ab-inscricao.png')}}" alt="abertura inscricoes">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 text-dark">Abertura das Inscrições</h1>
                <p>A partir do 01 de março de 2020 o site do PROJETO APRENDIZ <br>
                estará aberto para inscrições.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="400" src="{{ asset('images/texto.png')}}" alt="abertura inscricoes">
            <div class="carousel-caption d-none d-md-block">
                <p class="text-light">Que com grande voz diziam: Digno é o Cordeiro, que foi morto, de receber o poder, e riquezas, e sabedoria, e força, e honra, e glória, e ações de graças. </p><small>Apocalipse 5:12</small>
            </div>
        </div>
    </div> 
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>


<!-- 
<div id="slideAprendiz" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($eventos as $evento)
            <li data-target="#slideAprendiz" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : ''}}"></li>
        @endforeach
    </ol>

    <div class="carousel-inner">
        @foreach($eventos as $evento)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img class="d-block w-100" widht="800" height="450" src="{{ is_null($evento->imagem) ? asset('img/img1.jpg') : asset($evento->imagem)}}" alt="{{ $evento->titulo }}">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-1">{{ $evento->titulo }}</h1>
                <p class="h3">{{ $evento->descricao }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#slideAprendiz" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#slideAprendiz" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Próximo</span>
    </a>
</div> -->