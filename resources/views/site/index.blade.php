@extends('layouts.app')

@include('layouts._nav')

@include('layouts._slide')

@section('content')

  <div class="card-header">
    <h3>Página Pública</h3>
  </div>

<div class="container">
  <div class="card-body row" align="center">
    <div class="col-sm-6">
      <div class="ml-5">
        <div class="card-body bg-light">
          <h1 class="display-4" align="left">Cadastre-se<br>Para ser aluno</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" 
          data-target="#ContratoAluno">
            Quero Ser ALUNO
          </button>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card border-secondary mb-3">
        <img class="card-img-top" src="/img/logo.png" alt="Imagem de capa do card">
        <div class="card-body bg-light">
          <h5 class="card-title">Aluno</h5>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" 
          data-target="#ContratoMonitor">
            Quero Ser ALUNO
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Modal Aluno-->
    <div class="modal fade" id="ContratoAluno" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TituloModalLongoExemplo">Termos de Adesão - Aluno</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>            
          <div class="modal-body">
            @include('layouts._contrato_aluno')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <a class="btn btn-primary" href="{{ route('registrar') }}">Registrar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Monitor-->
    <div class="modal fade" id="ContratoMonitor" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TituloModalLongoExemplo">Termos de Adesão - Monitor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>            
          <div class="modal-body">
            @include('layouts._contrato_monitor')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <a class="btn btn-primary" href="{{ route('registrar') }}">Registrar</a>
          </div>
        </div>
      </div>
    </div>

  <div class="container">
    @include('site.includes._cursos')
  </div>


@endsection