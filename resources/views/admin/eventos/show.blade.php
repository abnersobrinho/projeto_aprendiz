@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Detalhes da Área')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('evento.index') }}">Lista de eventos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Evento</li>
        </ol>
    </nav>

    <div class="card card-default">
        <div class="card-body">
            <div class="row">
                <label class="col-sm-2 control-label">Código</label>
                <div class="col-sm-10"><span><b>{{$registro->id}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Título</label>
                <div class="col-sm-10"><span><b>{{$registro->titulo}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10"><span><b>{{$registro->descricao}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Data</label>
                <div class="col-sm-10"><span><b>{{$registro->data}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Hora</label>
                <div class="col-sm-10"><span><b>{{$registro->hora}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Local</label>
                <div class="col-sm-10"><span><b>{{$registro->local}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-10"><span><b>{{$registro->endereco}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Bairro</label>
                <div class="col-sm-10"><span><b>{{$registro->bairro}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Cidade</label>
                <div class="col-sm-10"><span><b>{{ $registro->cidade->nome }}</b></span></div>  
            </div>
            
            <div class="row">
                <label class="col-sm-2 control-label">Imagem</label>
                <div class="col-sm-4">
                    <img width="300" src="{{asset($registro->imagem)}} ">
                </div> 

                <label class="col-sm-1 control-label">Mapa</label>
                <div class="col-sm-5" witdh="300">
                    @if(isset($registro->mapa))
                        <div class="video-container">
                            {!! $registro->mapa !!}
                        </div>
                    @else
                        <h5>Não tem mapa</h5>
                    @endif
                </div> 
            </div>
        </div> 
           
        <div class="card-body">
            <a class="btn btn-secondary" href="{{ route('evento.index') }}">Voltar</a> 
        </div>
    </div>
</div>

@endsection