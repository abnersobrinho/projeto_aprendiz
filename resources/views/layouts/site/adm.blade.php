<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> 
    <script src="{{ asset('js/init.js') }}" defer></script> -->

    <!-- ícones -->
    <title>Projeto Aprendiz</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link src="/bower_components/jquery-file-upload/css/jquery.fileupload.css">

    <!-- WhatsHelp.io widget -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+55(77)998455220", // WhatsApp number
                call_to_action: "Envie uma mensagem", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
</head>

<body id="page-top">
    <div id="loader"></div>

    <main>
        <section class="jumbotron mt-n4">
            <div class="container">
                @if(Session::has('mensagem'))
                <div class="col-sm-12">
                    <div class="{{ Session::get('mensagem')['class'] }}" role="alert">
                        <h3 class="alert-heading">{{ Session::get('mensagem')['titulo'] }}</h3>
                        <p>{{ Session::get('mensagem')['msg'] }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif 
            </div>
            @yield('content') 
        </section>
    </main>

    <footer class="footer">
        <div class="region region-footer">
            <section id="block-block-5" class="block block-block clearfix">
                <div class="row" id="blocosfooter">
                    <div class="blk1 col-xs-12 col-sm-12 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
                        <H3>Projeto Aprendiz</H3>
                        <p>O Projeto Aprendiz é uma iniciativa voltada para o ensino musical, que está em funcionamento em diversas regiões do Brasil, com excelentes resultados. <br>
                        O Projeto é subordinado ao Departamento de Louvor da Igreja Cristã Maranata..</p>

                    </div>

                    <div class="blk1 col-xs-12 col-sm-12 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
                        <H3>Parceiros</H3>
                        <p>
                            <a href="http://www.satelitemaranata.org.br" target="_blank">Satélite Maranata</a><br>
                            <a href="https://www.igrejacristamaranata.org.br" target="_blank">Igreja Cristã Maranata</a><br>
                            <a href="http://www.louvoricm.org.br/projeto-aprendiz/" target="_blank">Projeto Aprendiz ICM</a><br>
                            <a href="https://portal.presbiterio.org.br/auth/login" target="_blank">Portal Presbitério</a><br>
                            <a href="https://www.igrejacristamaranata.org.br/enderecos-no-exterior/" target="_blank">Endereço das igrejas no exterior</a><br>
                        </p>
                    </div>

                    <div class="blk1 col-xs-12 col-sm-12 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                        <h3>Siga-nos</h3>
                        <div class="social-icons">
                            <div class="whatsapp">
                                <a href="#" target="_blank" title="whatsapp"><i class="fab fa-whatsapp"></i><a/>
                            </div>
        
                            <div class="facebook">
                                <a href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i><a/>
                            </div>

                            <div class="instagram">
                                <a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i><a/>
                            </div>

                            <div class="googleplus">
                                <a href="#" target="_blank" title="Google+"><i class="fab fa-youtube"></i><a/>
                            </div>
                        </div>
                    </div>
                    <div class="blk1 col-xs-12 col-sm-12 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
                        <H3>Outras Informações</H3>
                        <p>

                        </p>
                    </div>
                </div>
            </section>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i><br><small>top</small>
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
    
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="/bower_components/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="/bower_components/jquery-file-upload/js/jquery.fileupload.js"></script>

    <script>
      feather.replace()
    </script>

    <script type="text/javascript">
        function maiuscula(z){
            v = z.value.toUpperCase();
            z.value = v;
        }
    </script>

    <script>
        function onlynumber(evt) {
           var theEvent = evt || window.event;
           var key = theEvent.keyCode || theEvent.which;
           key = String.fromCharCode( key );
           //var regex = /^[0-9.,]+$/;
           var regex = /^[0-9.]+$/;
           if( !regex.test(key) ) {
              theEvent.returnValue = false;
              if(theEvent.preventDefault) theEvent.preventDefault();
           }
        }
    </script>

    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Botão que acionou o modal
            var recipient = button.data('whatever') 
            var role = button.data('whatever')
                document.querySelector('#funcao').value = role


            // Extrai informação dos atributos data-*
            // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
            // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
            var modal = $(this)
            if(recipient === 2) {
                modal.find('.modal-title').text('Cadastro de Aluno')
            }
            else {
                modal.find('.modal-title').text('Cadastro de Monitor')
            }
            // modal.find('.modal-body input').val(recipient)
        })
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
       
</body>

</html>