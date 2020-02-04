<div class="form-group">
	<div class="form-check">
		<input class="form-check-input" type="radio" name="termos" id="termos" value="s" required {{(isset($registro->termos) && $registro->termos == 's' ? 'checked' : '')}}>
		<label class="form-check-label mb-4" for="termos">Concordo com os termos e condições</label>
	</div>
	<p class="font-weight-light" style="font-size: .71429rem;"> 
		Eu também concordo que o Projeto Aprendiz e seus representantes podem entrar em contato comigo por e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.
	</p>
</div>

<div class="form-group row">	
	<div class="col-md-2">
		@if(isset($registro->avatar))
			<img width="120" src="{{ asset($registro->avatar) }}">
		@endif
	</div>
	<div class="col-md-9">
		<label for="avatar" class="control-label">Escolha uma imagem para o perfil</label>
		<input id="avatar" type="file" class="form-control-file" name="avatar">	
	</div>
</div>

<div class="card-header"><h3>Dados Pessoais</h3></div>
	<div class="card-body">
		<div class="form-group row">
		    <label for="nomecompleto" class="col-md-3 col-form-label text-md-right"><b>{{ __('Nome Completo') }}</b></label>
		    <div class="col-md-9">
		        <input id="nomecompleto" type="text" class="form-control @error('nomecompleto') is-invalid @enderror" name="nomecompleto" value="{{ isset($registro->nomecompleto) ? $registro->nomecompleto : ''}}" autofocus required autocomplete="nomecompleto" onkeyup="maiuscula(this)">
		        @error('nomecompleto')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>

		<div class="form-group row">
		    <label for="nome" class="col-md-3 col-form-label text-md-right"><b>{{ __('Como quer ser chamado?') }}</b></label>
		    <div class="col-md-9">
		        <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ isset($registro->nome) ? $registro->nome : ''}}" required autocomplete="nome" autofocus onkeyup="maiuscula(this)">
		        @error('nome')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>

		<div class="form-group row">
		    <label for="email" class="col-md-3 col-form-label text-md-right"><b>{{ __('E-Mail') }}</b></label>
		    <div class="col-md-4">
		        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($registro->email) ? $registro->email : ''}}" required autocomplete="email">

		        @error('email')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>

		    <label for="senha" class="col-md-2 col-form-label text-md-right"><b>{{ __('Senha') }}</b></label>
		    <div class="col-md-3">
		        <input id="senha" type="password" class="form-control @error('senha') is-invalid @enderror" name="senha" required autocomplete="new-senha" value="{{ isset($registro->senha) ? $registro->senha : ''}}">
		        @error('senha')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>

		<div class="form-group row">
			<label for="celular" class="col-sm-3 col-form-label text-md-right"><b>Celular</b></label>
			<div class="col-sm-4">			
				<input type="text" class="form-control" name="celular" onkeypress="return onlynumber();" maxlength="11" value="{{ isset($registro->celular) ? $registro->celular : '' }}" required><small id="celular" class="form-text text-muted">Somente números</small>
			</div>

			<label for="tel_fixo" class="col-sm-2 col-form-label text-md-right"><b>Telefone</b></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" name="tel_fixo" onkeypress="return onlynumber();" maxlength="11" placeholder="Telefone fixo" value="{{ isset($registro->tel_fixo) ? $registro->tel_fixo : '' }}">
				<small id="tel_fixo" class="form-text text-muted">Somente número</small>
			</div>		
		</div>	
		
		<div class="form-group row align-items-center">
			<label for="cpf" class="col-sm-3 col-form-label text-md-right"><b>CPF</b></label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="cpf" onkeypress="return onlynumber();" maxlength="11" placeholder="CPF somente números " value="{{ isset($registro->cpf) ? $registro->cpf : '' }}" required>
			</div>
			<label for="sexo" class="col-md-2 col-form-label text-md-right"><b>Sexo</b></label>
			<div class="col-md-3">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="sexo" id="sexo_m" value="m" {{(isset($registro->sexo) && $registro->sexo == 'm'  ? 'checked' : '')}}>
					<label class="form-check-label" for="inlineRadio1">Masc.</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="sexo" id="sexo_f" value="f" {{(isset($registro->sexo) && $registro->sexo == 'f' ? 'checked' : '')}}>
					<label class="form-check-label" for="inlineRadio2">Fem.</label>
				</div>
			</div>
		</div>

		<div class="form-group row">
			<label for="endereco" class="col-sm-3 col-form-label text-md-right"><b>Endereço</b></label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="endereco" placeholder="Nome da rua e número" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" onkeyup="maiuscula(this)" required>
			</div>	
		</div>

		<div class="form-group row">
			<label for="cidade" class="col-sm-3 col-form-label text-md-right"><b>Cidade</b></label>
			<div class="col-sm-4">
			   <select name="cidade_id" class="form-control" required>
			        @foreach($cidades as $cidade)
			            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
			        @endforeach
			    </select>
			</div>	

			<label for="bairro" class="col-sm-2 col-form-label text-md-right"><b>Bairro</b></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" name="bairro" placeholder="Bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" onkeyup="maiuscula(this)" required>
			</div>	
		</div>

		
	</div>


	<!--Outras informações -->
	<div class="card-header"><h3>Outras Informações</h3></div>
	<div class="card-body">
		<div class="form-group row">
			<label for="igreja" class="col-sm-3 col-form-label text-md-right"><b>Igreja</b></label>
			<div class="col-sm-9">
			   <select name="igreja_id" class="form-control" required>
			        @foreach($igrejas as $igreja)
			            <option value="{{ $igreja->id }}" {{(isset($registro->igreja_id) && $registro->igreja_id == $igreja->id  ? 'selected' : '')}}>{{ $igreja->nome }}</option>
			        @endforeach
			    </select>
			</div>
		</div>	

		<div class="form-group row">
			<label for="dtnasc" class="col-sm-3 col-form-label text-md-right"><b>Dt. nascimento</b></label>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="dtnasc" placeholder="Informe a data de nascimento" value="{{ isset($registro->dtnasc) ? $registro->dtnasc : '' }}" required>
			</div>		
			<label for="idade" class="col-sm-2 col-form-label text-md-right"><b>Idade</b></label>
			<div class="col-sm-3">
				<input type="number" class="form-control" name="idade" placeholder="Informe a data de nascimento" maxlength="3"  value="{{ isset($registro->idade) ? $registro->idade : '' }}" required>
			</div>
		</div>

		<div class="form-group row">
			<label for="responsavel" class="col-sm-3 col-form-label text-md-right"><b>Responsável</b></label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="responsavel" placeholder="Informe o nome do responsavel" value="{{ isset($registro->responsavel) ? $registro->responsavel : '' }}" onkeyup="maiuscula(this)">
			</div>	
		</div>

		<div class="form-group row align-items-center">
			<label class="col-sm-3 col-form-label text-md-right"><b>Toca algum instrumento?</b></label>
			<div class="col-md-3">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="toca" id="tocas" value="s" {{(isset($registro->toca) && $registro->toca == 's'  ? 'checked' : '')}}>
					<label class="form-check-label" for="inlineRadio1">Sim</label>
				</div>
				<div class="form-check form-check-inline">				
					<input class="form-check-input" type="radio" name="toca" id="tocan" value="n" {{(isset($registro->toca) && $registro->toca == 'n' ? 'checked' : '')}}>
					<label class="form-check-label" for="inlineRadio2">Não</label>
				</div>
			</div>
			<label for="instrumento" class="col-sm-2 col-form-label text-md-right"><b>Qual?</b></label>
			<div class="col-sm-4">
			   <select name="instrumento_id" class="form-control">
			        @foreach($instrumentos as $instrumento)
			            <option value="{{ $registro->instrumento_id }}" {{(isset($registro->instrumento_id) && $registro->instrumento_id == $registro->instrumento_id  ? 'selected' : '')}}>{{ $instrumento->nome }}</option>
			        @endforeach
			    </select>
			</div>
		</div>

<div class="form-group row">
	<label for="sobre" class="col-sm-3 control-label text-md-right"><b>Fale um pouco sobre você</b></label>
	<div class="col-sm-9">
		<textarea class="form-control" name="sobre" rows="3">
			{{(isset($registro->sobre) ? $registro->sobre : '')}}
		</textarea>
		<label>(Escreva aqui outras informações que julga importante a seu respeito)</label>
	</div>
</div>


@can('viewAny', App\Usuario::class)
<hr>
		<div class="form-group row align-items-center">
			<label class="col-sm-2 col-form-label text-md-right"><b>Ativo?</b></label>
			<div class="col-sm-3">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="ativo" id="ativo_s" value="s" {{(isset($registro->ativo) && $registro->ativo == 's'  ? 'checked' : '')}}>
					<label class="form-check-label" for="inlineRadio1">Sim</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="ativo" id="ativo_n" value="n" {{(isset($registro->ativo) && $registro->ativo == 'n' ? 'checked' : '')}}>
					<label class="form-check-label" for="inlineRadio2">Não</label>
				</div>
			</div>
			<label for="funcao" class="col-sm-2 col-form-label text-md-right"><b>Função</b></label>
			<div class="col-sm-5">
			   <select name="funcao" id="funcao" class="form-control">
			        @foreach($roles as $role)
			            <option value="{{ $role->id }}" {{(isset($registro->role_id) && $registro->role_id == $role->id  ? 'selected' : '')}}>{{ $role->nome }}</option>
			        @endforeach
			    </select>
			</div>	
		</div>
		@endcan
	</div>