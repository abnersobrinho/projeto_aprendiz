<div class="input-field">				
	<div class="form-group row">
		<label for="titulo" class="col-sm-2 control-label"><b>Título</b></label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}" required>
			<div class="invalid-feedback">
				Por favor, informe o título do curso
			</div>
		</div>
	</div>
</div>

<div class="input-field">				
	<div class="form-group row">
		<label for="descricao" class="col-sm-2 control-label"><b>Descrição</b></label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Título" value="{{ isset($registro->descricao) ? $registro->descricao : ''}}" required>
			<div class="invalid-feedback">
				Por favor, informe a descrição do curso
			</div>
		</div>
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-2">
		<label><b>Outras Informações</b></label>
	</div>
	<div class="col-sm-10">
		<textarea class="form-control" name="informacoes" rows="7">
			{{(isset($registro->informacoes) ? $registro->informacoes : '')}}
		</textarea>
		<label>(Escreva aqui outras informações referente ao curso)</label>
	</div>
</div>


<div class="form-group row">
	<label for="logo" class="col-sm-2 control-label"><b>Logo</b></label>
	<div class="col-sm-5">
		<input type="file" class="form-control-file" name="logo">
	</div>
	<div class="col-sm-5">
		@if(isset($registro->logo))
			<img width="120" src="{{ asset($registro->logo) }}">
		@endif
	</div>
</div>


<div class="form-group row">
	<label for="imagem" class="col-sm-2 control-label"><b>Imagem</b></label>
	<div class="col-sm-5">
		<input type="file" class="form-control-file" name="imagem">
	</div>
	<div class="col-sm-5">
		@if(isset($registro->imagem))
			<img width="120" src="{{ asset($registro->imagem) }}">
		@endif
	</div>
</div>

