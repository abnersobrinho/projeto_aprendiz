<div class="form-group">
	<div class="form-check">
		<input class="form-check-input" type="radio" name="termos" id="termos" value="s" required {{(isset($registro->termos) && $registro->termos == 's' ? 'checked' : '')}}>
		<label class="form-check-label mb-4" for="termos">Concordo com os termos e condições</label>
	</div>
	<p class="font-weight-light" style="font-size: .71429rem;"> 
		Eu também concordo que o Projeto Aprendiz e seus representantes podem entrar em contato comigo por e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.
	</p>
</div>
	
<div class="form-group row align-items-center">	
	<div class="col-md-2">
		@if(isset($registro->avatar))
			<img width="100" height="100" class="rounded-circle" src="{{ asset($registro->avatar)}}">
		@else	
			<img width="80" class="rounded-circle" src="https://via.placeholder.com/100x100">
		@endif
	</div>
	<div class="col-md-9">
		<div class="form-group row">
			<label for="avatar" class="control-label">Escolha uma imagem para o perfil</label>
				<input type="file" class="form-control-file" name="avatar">
		</div>
	</div>
</div>

<div class="card-header">
	<h5>Dados de Acesso</h5>
</div>
	<div class="card-body">
	<div class="form-group row">
	    <label for="nomecompleto" class="col-md-4 col-form-label text-md-right"><b>{{ __('Nome Completo') }}</b></label>
	    <div class="col-md-8">
	    	<input id="nomecompleto" type="text" class="form-control form-control-sm @error('nomecompleto') is-invalid @enderror" name="nomecompleto" value="{{ isset($registro->nomecompleto) ? $registro->nomecompleto : ''}}" autofocus required autocomplete="nomecompleto" onkeyup="maiuscula(this)">
		    @error('nomecompleto')
		        <span class="invalid-feedback" role="alert">
		            <strong>{{ $message }}</strong>
		        </span>
		    @enderror
		</div>
	</div>

	<div class="form-group row">
	    <label for="nome" class="col-md-4 col-form-label text-md-right"><b>{{ __('Como quer ser chamado?') }}</b></label>
	    <div class="col-md-8">
	        <input id="nome" type="text" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" value="{{ isset($registro->nome) ? $registro->nome : ''}}" required autocomplete="nome" autofocus onkeyup="maiuscula(this)">
	        @error('nome')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
	    </div>
	</div>

	<div class="form-group row">
	    <label for="email" class="col-md-4 col-form-label text-md-right"><b>{{ __('E-Mail') }}</b></label>
	    <div class="col-md-8">
	        <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ isset($registro->email) ? $registro->email : ''}}" required autocomplete="email">

	        @error('email')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
	    </div>
	</div>

	<div class="form-group row">
	    <label for="senha" class="col-md-4 col-form-label text-md-right"><b>{{ __('Senha') }}</b></label>
	    <div class="col-md-8">
	        <input id="senha" type="password" class="form-control form-control-sm @error('senha') is-invalid @enderror" name="senha" required autocomplete="new-senha" value="{{ isset($registro->senha) ? $registro->senha : ''}}">

	        @error('senha')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
	    </div>
	</div>

	<div class="form-group row">
		<label for="cidade_id" class="col-sm-4 col-form-label text-md-right"><b>Qual sua cidade?</b></label>
		<div class="col-sm-8">
		   <select name="cidade_id" class="form-control form-control-sm" required>
		        @foreach($cidades as $cidade)
		            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
		        @endforeach
		    </select>
		</div>	
	</div>

	<div class="form-group row">
		<label for="igreja_id" class="col-sm-4 col-form-label text-md-right"><b>Igreja</b></label>
		<div class="col-sm-8">
		   <select name="igreja_id" class="form-control form-control-sm" required>
		        @foreach($igrejas as $igreja)
		            <option value="{{ $igreja->id }}" {{(isset($registro->igreja_id) && $registro->igreja_id == $igreja->id  ? 'selected' : '')}}>{{ $igreja->nome }}</option>
		        @endforeach
		    </select>
		</div>
	</div>

	<div class="form-group row">
		<label for="toca" class="col-sm-4 control-label text-md-right"><b>Toca algum instrumento?</b></label>
		<div class="col-sm-2">
			<select name="toca" class="form-control">
				<option value="n" {{(isset($registro->toca) && $registro->toca == 'n'  ? 'selected' : '')}}>Não</option>
				<option value="s" {{(isset($registro->toca) && $registro->toca == 's'  ? 'selected' : '')}}>Sim</option>
			</select>
		</div>
		<div class="col-sm-6">
		   <select name="instrumento_id" class="form-control">
		   		<option value="">Nenhum</option>
		        @foreach($instrumentos as $instrumento)
		            <option value="{{ $instrumento->id }}" {{(isset($registro->instrumento_id) && $registro->instrumento_id == $instrumento->id  ? 'selected' : '')}}>{{ $instrumento->nome }}</option>
		        @endforeach
		    </select>
		</div>
	</div>	

	<div class="form-group row">
		<label for="celular" class="col-sm-4 col-form-label text-md-right"><b>Celular</b></label>
		<div class="col-sm-8">			
			<input type="text" class="form-control form-control-sm" name="celular" value="{{ isset($registro->celular) ? $registro->celular : '' }}" required><small id="celular" class="form-text text-muted">Use o formato (xx)99999-9999</small>
		</div>
	</div>

	<input type="hidden" name="funcao" id="funcao">	
</div>
<!-- fim dados de acesso -->			

@if(Auth::check())
<div class="card-header">
	<h5>Dados Pessoais</h5>
</div>
<div class="card-body">
	<div class="form-group row">
		<label for="cpf" class="col-sm-4 col-form-label text-md-right"><b>CPF</b></label>
		<div class="col-sm-8">
			<input type="text" class="form-control form-control-sm" name="cpf" placeholder="CPF " value="{{ isset($registro->cpf) ? $registro->cpf : '' }}" required>
			<small id="cpf" class="form-text text-muted">Utilize somente números</small>
		</div>	
	</div>

	<div class="form-group row">
		<label for="endereco" class="col-sm-4 col-form-label text-md-right"><b>Endereço</b></label>
		<div class="col-sm-8">
			<input type="text" class="form-control form-control-sm" name="endereco" placeholder="Nome da rua e número" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" onkeyup="maiuscula(this)" required>
		</div>	
	</div>

	<div class="form-group row">
		<label for="bairro" class="col-sm-4 col-form-label text-md-right"><b>Bairro</b></label>
		<div class="col-sm-8">
			<input type="text" class="form-control form-control-sm" name="bairro" placeholder="Bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" onkeyup="maiuscula(this)" required>
		</div>	
	</div>

	<div class="form-group row">
		<label for="tel_fixo" class="col-sm-4 col-form-label text-md-right"><b>Telefone</b></label>
		<div class="col-sm-8">
			<input type="text" class="form-control form-control-sm" name="tel_fixo" placeholder="Telefone fixo" value="{{ isset($registro->tel_fixo) ? $registro->tel_fixo : '' }}">
			<small id="tel_fixo" class="form-text text-muted">Use o formato (xx)9999-9999</small>
		</div>		
	</div>
</div>
<!-- fim DADOS PESSOAIS -->

<!--Outras informações -->
<div class="card-header">
	<h5>Outras Informações</h5>
</div>
<div class="card-body">
	<div class="form-group row">
		<label for="dtnasc" class="col-sm-4 col-form-label text-md-right"><b>Dt. nascimento</b></label>
		<div class="col-sm-8">
			<input type="date" class="form-control form-control-sm" name="dtnasc" placeholder="Informe a data de nascimento" value="{{ isset($registro->dtnasc) ? $registro->dtnasc : '' }}" required>
		</div>		
	</div>

	<div class="form-group row">
		<label for="responsavel" class="col-sm-4 col-form-label text-md-right"><b>Responsável</b></label>
		<div class="col-sm-8">
			<input type="text" class="form-control form-control-sm" name="responsavel" placeholder="Informe o nome do responsavel" value="{{ isset($registro->responsavel) ? $registro->responsavel : '' }}" onkeyup="maiuscula(this)">
		</div>	
	</div>

	<input type="hidden" name="funcao" value="{{ isset($registro->funcao) ? $registro->funcao : '' }}">
</div>
@endif