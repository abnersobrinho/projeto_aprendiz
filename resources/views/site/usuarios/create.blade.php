@extends('layouts.site.adm')

@include('layouts._nav')

@section('content')


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Escolha uma Opção!</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="height: 25rem;">
                    <img class="card-img-top" width="728" height="170" src="{{ asset('img/ser_aluno.jpg') }}" alt="ser aluno">
                    <div class="card-body">
                        <h5 class="card-title">Quero ser ALUNO</h5>
                        <p class="card-text">Para ser aluno do projeto é necessário ser membro da ICM, estar em comunhão com a igreja, ter o aval do pastor da igreja local, além de ter condição de deslocamento para o local onde serão ministradas as aulas.
                        </p>
                        <a href="{{ route('site.usuario.create')}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="2">ALUNO</a>
                    </div>
                </div>
            </div>
            
           <div class="col-sm-6">
                <div class="card" style="height: 25rem;">
                    <img class="card-img-top" width="728" height="170" src="{{ asset('img/ser_monitor.jpg')}}" alt="ser monitor">
                    <div class="card-body">
                        <h5 class="card-title">Quero ser MONITOR</h5>
                        <p class="card-text">Para atuar como professor(a) no projeto é necessário ser membro da ICM, estar em comunhão com a igreja, ter condição técnica e o aval do pastor da igreja local.</p><br>
                        <a href="{{ route('site.usuario.create')}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="3">MONITOR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('site.usuario.store') }}" method="POST">
{{ csrf_field()}}
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Abner aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    
                    @include('site.usuarios._form')
                   
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
               </div>
            </div>
        </div>
    </div>
</form>