@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Detalhes da Função')

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
            <label class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-10"><span><b>{{$registro->descricao}}</b></span></div>  
        </div>
    </div> 
       
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('role.index') }}">Voltar</a> 
    </div>
  
</div>

@endsection