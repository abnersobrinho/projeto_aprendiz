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
    </div> 
       
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('evento.index') }}">Voltar</a> 
    </div>
  
</div>

@endsection