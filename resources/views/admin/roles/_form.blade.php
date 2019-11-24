<div class="input-field">				
	<div class="form-group row">
		<label for="nome" class="col-sm-3 control-label">Código</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="nome" id="nome" placeholder="Código" value="{{ isset($registro->nome) ? $registro->nome : ''}}" onkeyup="maiuscula(this)" required>
			<div class="invalid-feedback">
				Por favor, informe um código para a função com 3 letras.
			</div>
		</div>
	</div>
</div>

<div class="input-field">				
	<div class="form-group row">
		<label for="descricao" class="col-sm-3 control-label">Descrição</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="descricao" placeholder="Descrição" value="{{ isset($registro->descricao) ? $registro->descricao : ''}}" onkeyup="maiuscula(this)" required>
			<div class="invalid-feedback">
				Por favor, informe uma descrição para a função.
			</div>
		</div>	
	</div>
</div>