<!doctype html>
<html lang="pt_br">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Projeto Aprendiz - ADM</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">
  </head>

    <body id="page-top">
        <div id="wrapper">
            <div id="loader"></div>
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Painel de controle</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span></a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <h6 class="dropdown-header">Acesso ao sistema:</h6>
                        <a class="dropdown-item" href="{{ route('usuario.index')}}">Usuários</a>
                        <div class="dropdown-divider"></div>

                        <h6 class="dropdown-header">Cadastros:</h6>
                        <a class="dropdown-item" href="{{ route('curso.index')}}">Curso</a>
                        <a class="dropdown-item" href="{{ route('evento.index')}}">Evento</a>
                        <a class="dropdown-item" href="{{ route('role.index')}}">Função</a>
                        <a class="dropdown-item" href="#">Turma</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('area.index')}}">Área</a>
                        <a class="dropdown-item" href="{{ route('cidade.index')}}">Cidade</a>
                        <a class="dropdown-item" href="{{ route('igreja.index')}}">Igreja</a>
                        <a class="dropdown-item" href="#">Pastor</a>

                        <a class="dropdown-item" href="404.html">404 Page</a>
                        <a class="dropdown-item" href="blank.html">Blank Page</a>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('graficos')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
                </li>
            </ul>

            <div id="content-wrapper">
                <div class="container-fluid">
                    <main>
                        @if(Session::has('mensagem'))
                        <div class="row">
                            <div class="col-sm-12 d-none d-lg-block">
                                <div id="alert" class="{{ Session::get('mensagem')['class'] }}">
                                    {{ Session::get('mensagem')['msg'] }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif

                        @yield('content')
                    </main>
                </div>
            </div>
        </div>

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>
        

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script type="text/javascript">
            // Este evendo é acionado após o carregamento da página
            jQuery(window).load(function() {
                //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
                jQuery("#loader").delay(2000).fadeOut("slow");
            });
        </script>
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Page level plugin JavaScript-->
        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin.min.js') }}"></script>

        <!-- Demo scripts for this page-->
        <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
        <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>  
          <!-- Ícones -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
          feather.replace()
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabela').DataTable( {
                    "search": false,
                    "language": {
                        "lengthMenu": "Mostrando _MENU_ registros por página",
                        "zeroRecords": "Nada a exibir",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "Não há registros para exibição",
                        "infoFiltered": "(filtrando de _MAX_ registros totais)",
                        "search": "Procurar",
                        "paginate": {
                            "next": "Próximo",
                            "previous": "Anterior"
                        }
                    }                   
                } );
            } );
        </script>  

        <script type="text/javascript">
            function maiuscula(z){
                v = z.value.toUpperCase();
                z.value = v;
            }
        </script>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';

                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');

                    // Loop over them and prevent submission
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

        <script>
            function mostrarResultado(box,num_max,campospan){
                var contagem_carac = box.length;
                if (contagem_carac != 0){
                    document.getElementById(campospan).innerHTML = contagem_carac + " caracteres digitados";
                if (contagem_carac == 1){
                    document.getElementById(campospan).innerHTML = contagem_carac + " caracter digitado";
                }
                if (contagem_carac >= num_max){
                    document.getElementById(campospan).innerHTML = "Limite de caracteres excedido!";
                }
                }else{
                    document.getElementById(campospan).innerHTML = "Ainda não temos nada digitado..";
                }
            }
        </script>

    </body>
</html>