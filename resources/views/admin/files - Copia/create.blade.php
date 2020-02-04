@extends('layouts.site.adm')

@section('page_title', 'Adicionar Arquivo')

@include('layouts._nav')

@section('content')

<form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}

    <div class="container">
        <ol class="breadcrumb" style="margin: 0px;">
            <li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('page_title')</li>
        </ol>
        <div class="card">
            <div class="card-header">
                <h1 class="display-4"><i class="fas fa-users"></i>  @yield('page_title')</h1>
            </div>
            <div class="card-body">
                @include('admin.files._form')                    
                <button type="submit" class="btn btn-primary">Atualizar</button>            
                <a class="btn btn-secondary" href="{{ route('home') }}">Voltar</a>
            </div>
        </div>
    </div>
</form> 

@endsection