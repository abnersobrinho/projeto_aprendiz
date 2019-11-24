<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/init.js') }}" defer></script> 

    <!-- ícones -->
    <title>Projeto Aprendiz</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('lib/icones/css/materialdesignicons.min.css') }}" media="all" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @if(Session::has('mensagem'))
        <div class="col-sm-12">
            <div class="{{ Session::get('mensagem')['class'] }}" role="alert">
                {{ Session::get('mensagem')['msg'] }}
            </div>
        </div>
        @endif 
    </div>

    @yield('content') 

    <div class="card-footer bg-light">
        <div class="row align-items-start justify-content-center">
            <div class="col-sm" align="center">
                <h3><b>Projeto Aprendiz</b></h3>
                <p>&reg; Copyright 2019 Abner Sobrinho</p> 
            </div>
            <div class="col-sm" align="center">
                <a class="link" href="http://www.facebook.com"><i class="material-icons">group</i></a>
                <a class="link" href="http://www.youtube.com"><i class="material-icons">group</i></a>
                <a class="link" href="http://www.instagram.com"><i class="material-icons">group</i></a>
                <a class="link" href="http://www.skype.com"><i class="material-icons">group</i></a>
            </div>
            <div class="col-sm" align="center">
                <a class="link" href="{{ route('index') }}">Site</a>
            </div>
        </div>
    </div>
    
</body>

</html>
