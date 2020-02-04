@extends('layouts.admin.adm')

@section('page_title', 'Dados do Usuário')

@include('layouts._nav')

@section('content')

<div class="card card-default mb-3">
    <div class="card-header">
        <h4><i class="fas fa-users"></i>  @yield('page_title')</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <label class="col-sm-2 control-label">Código</label>
            <div class="col-sm-4"><span><b>{{$registro->id}}</b></span></div>  
            <label class="col-sm-2 control-label">CPF</label>
            <div class="col-sm-4"><span><b>{{$registro->cpf}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10"><span><b>{{$registro->nome}}</b></span></div>  
        </div>
          <div class="row">
            <label class="col-sm-2 control-label">Tipo</label>
            <div class="col-sm-4"><span><b>{{$registro->role->descricao}}</b></span></div>  
            <label class="col-sm-2 control-label">Igreja</label>
            <div class="col-sm-4"><span><b>{{$registro->igreja->nome}}</b></span></div>  
        </div>

        <div class="row">
            <label class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-4"><span><b>{{$registro->email}}</b></span></div>  
            <label class="col-sm-2 control-label">Senha</label>
            <div class="col-sm-4"><span><b>****</b></span></div>  
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
            <div class="col-sm-10"><span><b>{{$registro->cidade->nome}}</b></span></div>  
        </div>

        <div class="row">
            <label class="col-sm-2 control-label">Telefone Fixo</label>
            <div class="col-sm-4"><span><b>{{$registro->tel_fixo}}</b></span></div>  
            <label class="col-sm-2 control-label">Celular</label>
            <div class="col-sm-4"><span><b>{{$registro->celular}}</b></span></div>  
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Responsável</label>
            <div class="col-sm-10"><span><b>{{$registro->responsavel}}</b></span></div>
        </div>
        <div class="row">
            <label class="col-sm-2 control-label">Data de Nascimento</label>
            <div class="col-sm-4"><span><b>{{$registro->dtnasc}}</b></span></div>  
            <label class="col-sm-2 control-label">Idade</label>
            <div class="col-sm-4"><span><b>{{$registro->idade}}</b></span></div> 
        </div>

    </div> 
       
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('usuario.index') }}">Voltar</a> 
    </div>
  
</div>

@endsection