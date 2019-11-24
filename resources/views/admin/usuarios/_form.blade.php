<div class="card card-default">
	<!-- Dados de acesso -->
	<div class="card-header"><h3>Dados de Acesso</h3></div>
	<div class="card-body">
		<div class="form-group row">
			<label for="nome" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nome" placeholder="Digite o seu nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}" onkeyup="maiuscula(this)">
			</div>	
		</div>

		<div class="form-group row">
			<label for="email" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-4">
				<input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail" value="{{ isset($registro->email) ? $registro->email : '' }}">
			</div>	
			<label for="senha" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="senha" placeholder="Digite uma senha de acesso" value="{{ isset($registro->senha) ? $registro->senha : '' }}">
			</div>	
		</div>
	</div>

	
	<div class="card-header"><h3>Dados Pessoais</h3></div>
	<div class="card-body">
		<div class="form-group row">
			<label for="cpf" class="col-sm-2 control-label">CPF</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="cpf" placeholder="Digite o seu cpf" value="{{ isset($registro->cpf) ? $registro->cpf : '' }}">
			</div>	
		</div>

		<div class="form-group row">
			<label for="endereco" class="col-sm-2 control-label">Endereço</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="endereco" placeholder="Digite o seu Endereço" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" onkeyup="maiuscula(this)">
			</div>	
		</div>

		<div class="form-group row">
			<label for="cidade" class="col-sm-2 control-label">Cidade</label>
			<div class="col-sm-4">
			   <select name="cidade_id" class="form-control">
			        @foreach($cidades as $cidade)
			            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
			        @endforeach
			    </select>
			</div>	

			<label for="bairro" class="col-sm-2 control-label">Bairro</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="bairro" placeholder="Informe o bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" onkeyup="maiuscula(this)">
			</div>	
		</div>

		<div class="form-group row">
			<label for="tel_fixo" class="col-sm-2 control-label">Telefone</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="tel_fixo" placeholder="Digite o seu tel_fixo" value="{{ isset($registro->tel_fixo) ? $registro->tel_fixo : '' }}">
			</div>	

			<label for="celular" class="col-sm-2 control-label">Celular</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="celular" placeholder="Informe o seu Celular-Whatsapp" value="{{ isset($registro->celular) ? $registro->celular : '' }}">
			</div>	
		</div>
	</div>


	<!--Outras informações -->
	<div class="card-header"><h3>Outras Informações</h3></div>
	<div class="card-body">
		<div class="form-group row">
			<label for="igreja" class="col-sm-2 control-label">Igreja</label>
			<div class="col-sm-4">
			   <select name="igreja_id" class="form-control">
			        @foreach($igrejas as $igreja)
			            <option value="{{ $igreja->id }}" {{(isset($registro->igreja_id) && $registro->igreja_id == $igreja->id  ? 'selected' : '')}}>{{ $igreja->nome }}</option>
			        @endforeach
			    </select>
			</div>	
			<label for="role" class="col-sm-2 control-label">Função</label>
			<div class="col-sm-4">
			   <select name="role_id" class="form-control">
			        @foreach($roles as $role)
			            <option value="{{ $role->id }}" {{(isset($registro->role_id) && $registro->role_id == $role->id  ? 'selected' : '')}}>{{ $role->nome }}</option>
			        @endforeach
			    </select>
			</div>	
		</div>



		<div class="form-group row">
			<label for="dtnasc" class="col-sm-2 control-label">Data de nascimento</label>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="dtnasc" placeholder="Informe a data de nascimento" value="{{ isset($registro->dtnasc) ? $registro->dtnasc : '' }}">
			</div>	

			<label for="idade" class="col-sm-2 control-label">Idade</label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="idade" placeholder="Selecione a idade" value="{{ isset($registro->idade) ? $registro->idade : '' }}">
			</div>	
		</div>

		<div class="form-group row">
			<label for="responsavel" class="col-sm-2 control-label">Responsável</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="responsavel" placeholder="Informe o nome do responsavel" value="{{ isset($registro->responsavel) ? $registro->responsavel : '' }}" onkeyup="maiuscula(this)">
			</div>	
		</div>

	</div>


</div>