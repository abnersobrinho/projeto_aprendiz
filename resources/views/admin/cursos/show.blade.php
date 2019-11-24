@extends('layouts.adm')

@include('layouts._nav')

@section('page_title', 'Detalhes do Curso')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cidade.index') }}">Lista de cursos</a></li>
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
            <div class="row">
                <label class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10"><span><b>{{$registro->descricao}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Outras Informações</label>
                <div class="col-sm-10"><span><b>{{$registro->informacoes}}</b></span></div>  
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Imagem</label>
                <div class="col-sm-5"><img width="300" src="{{$registro->imagem}}"></div>  
                <label class="col-sm-1 control-label">Logo</label>
                <div class="col-sm-4"><img width="300" src="{{$registro->logo}}"></div>  
            </div>
        </div> 
       
        <div class="card-body">
            <a class="btn btn-secondary" href="{{ route('curso.index') }}">Voltar</a> 
        </div>
    </div> 
</div>

@endsection