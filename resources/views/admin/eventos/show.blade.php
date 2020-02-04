@extends('layouts.admin.adm')

@section('page_title', 'Detalhes do Evento')

@include('layouts._nav')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('evento.index') }}">Lista de eventos</a></li>
    <li class="breadcrumb-item active" aria-current="page">@yield('page_title')</li>
</ol>

<div class="card card-default mb-3">
    <div class="card-header">
        <h4><i class="fas fa-calendar"></i>  @yield('page_title')</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <label class="col-sm-2 text-md-right">Código</label>
            <div class="col-sm-10"><span><b>{{$registro->id}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Título</label>
            <div class="col-sm-10"><span><b>{{$registro->titulo}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Descrição</label>
            <div class="col-sm-10"><span><b>{{$registro->descricao}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Data</label>
            <div class="col-sm-10"><span><b>{{$registro->data}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Hora</label>
            <div class="col-sm-10"><span><b>{{$registro->hora}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Local</label>
            <div class="col-sm-10"><span><b>{{$registro->local}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Endereço</label>
            <div class="col-sm-10"><span><b>{{$registro->endereco}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Bairro</label>
            <div class="col-sm-10"><span><b>{{$registro->bairro}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 text-md-right">Cidade</label>
            <div class="col-sm-10"><span><b>{{ $registro->cidade->nome }}</b></span></div>  
        </div>
        
        <div class="row">
            <img class="col-md-6" width="300" src="{{asset($registro->imagem)}} ">
            @if(isset($registro->mapa))
                <div widht="300" class="col-md-6 video-container">
                    {!! $registro->mapa !!}
                </div>
            @else
                <h5>Não tem mapa</h5>
            @endif 
        </div>
    </div> 
       
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('evento.index') }}">Voltar</a> 
    </div>
</div>
</div>

@endsection