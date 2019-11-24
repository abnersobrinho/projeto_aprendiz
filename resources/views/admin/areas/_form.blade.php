<div class="input-field">				
	<div class="form-group row">
		<label for="titulo" class="col-sm-3 control-label"><b>Título</b></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Nome" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}" onkeyup="maiuscula(this)" required>
			<div class="invalid-feedback">
				Por favor, informe o título da área
			</div>
		</div>
	</div>
</div>
