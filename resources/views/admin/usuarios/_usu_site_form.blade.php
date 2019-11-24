<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="cadastro" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true"></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Perfil</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contact" aria-selected="false">Contato</a>
	</li>
</ul>
<div class="tab-content" id="myTabContent">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

	<div class="row">
		<div class="card-body col-sm-8">
			
		</div>

		<div class="col-sm-4 mt-4 card-body border bg-light" style="width: 20rem;">
		<h5 class="card-title">Cadastre-se agora</h5>
			<div class="form-group">
				<input type="email" class="form-control p-3 mb-4" name="email" placeholder="E-mail" value="">	
				<input type="text" class="form-control p-3 mb-2" name="nome" placeholder="Nome" value="" onkeyup="maiuscula(this)">
				<input type="text" class="form-control p-3 mb-2" name="tel_fixo" placeholder="Telefone fixo" value="">
				<input type="text" class="form-control p-3 mb-2" name="celular" placeholder="Celular-Whatsapp" value="">	
				<input type="password" class="form-control p-3 mb-2" name="senha" placeholder="Criar senha" value="">
			 	<div class="form-group">
		    		<div class="form-check">
		      			<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
		      			<label class="form-check-label" for="invalidCheck2">
		        			Concordo com os termos e condições
		      			</label>
		    		</div>
		  		</div>
			</div>
			<p class="font-weight-light" style="font-size: .71429rem;">
				Eu também concordo que o Projeto Aprendiz e seus representantes podem entrar em contato comigo por e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.
			</p>
			<button type="button" class="btn btn-primary btn-lg btn-block">AVANÇAR  ></button>
			<small class="text-muted">Já tem uma conta?><a class="link" href="#">Entrar</a></small>
		</div>
	</div>

	<div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
		...
	</div>
	<div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contact-tab">
		...
	</div>
</div>