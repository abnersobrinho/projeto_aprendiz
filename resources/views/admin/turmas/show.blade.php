@extends('layouts.admin.adm')

@section('page_title', 'Detalhes do Curso')

@include('layouts._nav')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('curso.index') }}">Lista de cursos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
</ol>

<div class="card card-default mb-3">
    <div class="card-header">
        <h4><i class="fas fa-book"></i>  @yield('page_title')</h4>
    </div>
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
            <label class="col-sm-2 control-label">Publicado?</label>
            <div class="col-sm-4"><span><b>{{$registro->publicar}}</b></span></div> 
            <div class="col-sm-1"></div> 
            <label class="col-sm-1 control-label">Tipo</label>
            <div class="col-sm-4"><span><b>{{$registro->tipo}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Outras Informações</label>
            <div class="col-sm-10"><span><b>{{$registro->informacoes}}</b></span></div>  
        </div>
        <div class="row"> 
            <label class="col-sm-2 control-label">Logo</label>
            <div class="col-sm-5"><img width="120" src="{{asset($registro->logo)}}"></div>  
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12"><img width="300" src="{{asset($registro->imagem)}}"></div>
        </div> 
    </div> 
   
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('curso.index') }}">Voltar</a> 
    </div>
</div> 
</div>

@endsection