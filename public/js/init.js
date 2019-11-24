$(document).ready(function() 
{ 
  	$(".proximaAba").click(function() 
  	{   
	    var tab = $(this).closest('.tab-pane');    
	    $('.' + tab[0].id + ', .nav-pills li').removeClass('active');
	    $('.nav-pills li a[href="#' + tab.next()[0].id + '"]').parent().addClass('active');
	    tab.next().addClass('active');   
	    $(this).parents(".tab-pane").removeClass('active');    
  	});

  	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});




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

	
});