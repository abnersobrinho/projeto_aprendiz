<div class="input-field">				
	<div class="form-group row">
		<label for="nome" class="col-sm-3 control-label"><b>Nome</b></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="{{ isset($registro->nome) ? $registro->nome : ''}}" onkeyup="maiuscula(this)" required>
			<div class="invalid-feedback">
				Por favor, informe o nome da cidade
			</div>
		</div>
	</div>
</div>

<div class="input-field">
	<div class="form-group row">
		<label for="uf" class="col-sm-3 control-label"><b>Estado</b></label>
		<div class="col-sm-9">
			<select name="uf" class="form-control" required>
				<option value="" disabled selected>Selecione...</option>
				<option value="AC" {{(isset($registro->uf) && $registro->uf == 'AC' ? 'selected' : '')}}>AC</option>
				<option value="AL" {{(isset($registro->uf) && $registro->uf == 'AL' ? 'selected' : '')}}>AL</option>
				<option value="AM" {{(isset($registro->uf) && $registro->uf == 'AM' ? 'selected' : '')}}>AM</option>
				<option value="BA" {{(isset($registro->uf) && $registro->uf == 'BA' ? 'selected' : '')}}>BA</option>
				<option value="CE" {{(isset($registro->uf) && $registro->uf == 'CE' ? 'selected' : '')}}>CE</option>
				<option value="DF" {{(isset($registro->uf) && $registro->uf == 'DF' ? 'selected' : '')}}>DF</option>
				<option value="ES" {{(isset($registro->uf) && $registro->uf == 'ES' ? 'selected' : '')}}>ES</option>
				<option value="GO" {{(isset($registro->uf) && $registro->uf == 'GO' ? 'selected' : '')}}>GO</option>
				<option value="MA" {{(isset($registro->uf) && $registro->uf == 'MA' ? 'selected' : '')}}>MA</option>
				<option value="MG" {{(isset($registro->uf) && $registro->uf == 'MG' ? 'selected' : '')}}>MG</option>
				<option value="MS" {{(isset($registro->uf) && $registro->uf == 'MS' ? 'selected' : '')}}>MS</option>
				<option value="MT" {{(isset($registro->uf) && $registro->uf == 'MT' ? 'selected' : '')}}>MT</option>
				<option value="PA" {{(isset($registro->uf) && $registro->uf == 'PA' ? 'selected' : '')}}>PA</option>
				<option value="PB" {{(isset($registro->uf) && $registro->uf == 'PB' ? 'selected' : '')}}>PB</option>
				<option value="PE" {{(isset($registro->uf) && $registro->uf == 'PE' ? 'selected' : '')}}>PE</option>
				<option value="PI" {{(isset($registro->uf) && $registro->uf == 'PI' ? 'selected' : '')}}>PI</option>
				<option value="PR" {{(isset($registro->uf) && $registro->uf == 'PR' ? 'selected' : '')}}>PR</option>
				<option value="RJ" {{(isset($registro->uf) && $registro->uf == 'RJ' ? 'selected' : '')}}>RJ</option>
				<option value="RN" {{(isset($registro->uf) && $registro->uf == 'RN' ? 'selected' : '')}}>RN</option>
				<option value="RO" {{(isset($registro->uf) && $registro->uf == 'RO' ? 'selected' : '')}}>RO</option>
				<option value="RR" {{(isset($registro->uf) && $registro->uf == 'RR' ? 'selected' : '')}}>RR</option>
				<option value="RS" {{(isset($registro->uf) && $registro->uf == 'RS' ? 'selected' : '')}}>RS</option>
				<option value="SC" {{(isset($registro->uf) && $registro->uf == 'SC' ? 'selected' : '')}}>SC</option>
				<option value="SE" {{(isset($registro->uf) && $registro->uf == 'SE' ? 'selected' : '')}}>SE</option>
				<option value="SP" {{(isset($registro->uf) && $registro->uf == 'SP' ? 'selected' : '')}}>SP</option>
				<option value="TO" {{(isset($registro->uf) && $registro->uf == 'TO' ? 'selected' : '')}}>TO</option>
			</select>
			<div class="invalid-feedback">
				Selecione o estado na lista.
			</div>
		</div>	
	</div>
</div>