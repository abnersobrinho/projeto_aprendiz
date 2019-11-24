<!DOCTYPE html>
<html lang="pt-br">
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

    <div class="card-header" align="center">
        <h3> @yield('page_title') </h3>
    </div>
    

    <div class="container">
        @if(Session::has('mensagem'))
        <div class="col-sm-12">
            <div class="{{ Session::get('mensagem')['class'] }}" role="alert">
                {{ Session::get('mensagem')['msg'] }}
            </div>
        </div>
        @endif 
    </div>
</div>
    
    <div class="card-body ">
    @yield('content')
</div>
        

    <script type="text/javascript">
        function maiuscula(z){
            v = z.value.toUpperCase();
            z.value = v;
        }
    </script>
    <script type="text/javascript">
            // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
            var forms = document.getElementsByClassName('needs-validation');
            // Faz um loop neles e evita o envio
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        
    </script>
</body>
</html>