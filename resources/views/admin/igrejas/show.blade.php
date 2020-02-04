@extends('layouts.admin.adm')

@include('layouts._nav')

@section('page_title', 'Informações da Igreja')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('igreja.index') }}">Lista de igreja</a></li>
    <li class="breadcrumb-item active" aria-current="page">@yield('page_title')</li>
</ol>

<div class="card card-default mb-3">
    <div class="card-header">
        <h4><i class="fas fa-place-of-worship"></i>  @yield('page_title')</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <label class="col-sm-3 text-md-right">Código</label>
            <div class="col-sm-9"><span><b>{{$registro->id}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-3 text-md-right">Nome</label>
            <div class="col-sm-9"><span><b>{{$registro->nome}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-3 text-md-right">Área</label>
            <div class="col-sm-9"><span><b>{{$registro->area->titulo}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-3 text-md-right">Endereço</label>
            <div class="col-sm-9"><span><b>{{$registro->endereco}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-3 text-md-right">Cidade</label>
            <div class="col-sm-9"><span><b>{{$registro->cidade->nome}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-3 text-md-right">Bairro</label>
            <div class="col-sm-9"><span><b>{{$registro->bairro}}</b></span></div>
        </div>
    </div>
    <div class="row">
        <img class="col-md-6" width="300" src="{{asset($registro->imagem)}} ">
        @if(isset($registro->mapa))
            <div widht="300" class="col-md-6 video-container">
                {!! $registro->mapa !!}
            </div>
        @else
            <h5 class="text-info">Não tem mapa</h5>
        @endif 
    </div>
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('igreja.index') }}">Voltar</a> 
    </div> 
</div>

@endsection