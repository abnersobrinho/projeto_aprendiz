@extends('layouts.app')

@include('layouts._nav')

@include('layouts._slide')

@section('content')

  <div class="card-header">
    <h3>Página Pública</h3>
  </div>

<div class="row">
  <img class="img-fluid" style="max-width:100% height:auto"  src="/img/logo_50_anos.JPG">
    <div class="card-body" align="center">    
      <div class="col-sm-6">
        <div class="ml-5">
          <div class="card-body bg-light">
            <h1 class="display-4" align="left">Cadastre-se<br>Para ser ALUNO</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" 
            data-target="#ContratoAluno">
              Quero Ser ALUNO
            </button>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="ml-5">
          <div class="card-body bg-light">
            <h1 class="display-4" align="left">Cadastre-se<br>Para ser MONITOR</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" 
            data-target="#ContratoMonitor">
              Quero Ser MONITOR
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