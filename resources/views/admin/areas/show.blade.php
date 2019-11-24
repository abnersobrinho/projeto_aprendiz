@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Detalhes da Área')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('area.index') }}">Lista de áreas</a></li>
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
                <label class="col-sm-2 control-label">Título</label>
                <div class="col-sm-10"><span><b>{{$registro->titulo}}</b></span></div>  
            </div>
        </div> 
       
        <div class="card-body">
            <a class="btn btn-secondary" href="{{ route('area.index') }}">Voltar</a> 
        </div>
    </div> 
</div>

@endsection