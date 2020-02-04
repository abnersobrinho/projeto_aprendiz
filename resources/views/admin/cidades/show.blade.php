@extends('layouts.admin.adm')

@section('page_title', 'Detalhes da Cidade')

@include('layouts._nav')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cidade.index') }}">Lista de cidades</a></li>
            <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
        </ol>
    </nav>

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
                <label class="col-sm-2 control-label">UF</label>
                <div class="col-sm-10"><span><b>{{$registro->uf}}</b></span></div>  
            </div>
        </div> 
       
        <div class="card-body">
            <a class="btn btn-secondary" href="{{ route('cidade.index') }}">Voltar</a> 
        </div>
    </div> 
</div>

@endsection