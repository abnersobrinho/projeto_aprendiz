@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Detalhes do Evento')

@section('content')

<div class="card card-default">
    <div class="card-body">
        <div class="row">
            <label class="col-sm-2 control-label">Código</label>
            <div class="col-sm-10"><span><b>{{$registro->id}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10"><span><b>{{$registro->nome}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Área</label>
            <div class="col-sm-10"><span><b>{{$registro->area->titulo}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10"><span><b>{{$registro->endereco}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Cidade</label>
            <div class="col-sm-10"><span><b>{{$registro->cidade->nome}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Bairro</label>
            <div class="col-sm-10"><span><b>{{$registro->bairro}}</b></span></div>
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Local</label>
            <div class="col-sm-10">{{$registro->local)}}</div>
        </div>
    </div> 
       
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('evento.index') }}">Voltar</a> 
    </div>
  
</div>

@endsection