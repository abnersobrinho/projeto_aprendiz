<div class="input-field">				
	<div class="form-group row">
		<label for="titulo" class="col-sm-3 control-label text-md-right"><b>Título</b></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}" onkeyup="maiuscula(this)" required autofocus>
			<div class="invalid-feedback">
				Por favor, informe o título do curso
			</div>
		</div>
	</div>
</div>

<div class="input-field">				
	<div class="form-group row">
		<label for="descricao" class="col-sm-3 control-label text-md-right"><b>Descrição</b></label>
		<div class="col-sm-9">
			<input type="text" class="char-count form-control" name="descricao" id="campo" data-ls-module="charCounter" maxlength="150" placeholder="" value="{{ isset($registro->descricao) ? $registro->descricao : ''}}" required  onkeyup="mostrarResultado(this.value,150,'spcontando');contarCaracteres(this.value,150,'sprestante')">
				<small><span id="spcontando">Máximo 150 caracteres</span></small><br />
				<small><span id="sprestante" style="font-family:Georgia;"></span></small>
			<div class="invalid-feedback">
				Por favor, informe a descrição do curso
			</div>
		</div>
	</div>
</div>

<div class="form-group row">
	<label for="informacoes" class="col-sm-3 control-label text-md-right"><b>Outras Informações</b></label>
	<div class="col-sm-9">
		<textarea class="form-control" name="informacoes" rows="3">
			{{(isset($registro->informacoes) ? $registro->informacoes : '')}}
		</textarea>
		<label>(Escreva aqui outras informações referente ao curso)</label>
	</div>
</div>

<div class="form-group row">
	<label for="publico" class="col-sm-3 control-label text-md-right"><b>Público</b></label>
	<div class="col-sm-9">
		<textarea class="form-control" name="publico" rows="3">
			{{(isset($registro->publico) ? $registro->publico : '')}}
		</textarea>
		<label>(Escreva aqui a quem se destina este curso)</label>
	</div>
</div>

<div class="form-group row">
	<label for="imagem" class="col-sm-3 control-label text-md-right"><b>Imagem</b></label>
	<div class="col-sm-4">
		<input type="file" class="form-control-file" name="imagem">
	</div>
	<div class="col-sm-5">
		@if(isset($registro->imagem))
			<img width="120" src="{{ asset($registro->imagem)}}">
		@endif
	</div>
</div>

<div class="form-group row">
	<label for="publicar" class="col-sm-3 control-label text-md-right"><b>Publicar?</b></label>
	<div class="col-sm-3">
		<select name="publicar" class="form-control">
			<option value="n" {{(isset($registro->publicar) && $registro->publicar == 'n'  ? 'selected' : '')}}>Não</option>
			<option value="s" {{(isset($registro->publicar) && $registro->publicar == 's'  ? 'selected' : '')}}>Sim</option>
		</select>
	</div>

	<label for="tipo" class="col-sm-3 control-label text-md-right"><b>Tipo</b></label>
	<div class="col-sm-3">
		<select name="tipo" class="form-control">
			<option value="presencial" {{(isset($registro->tipo) && $registro->tipo == 'presencial'  ? 'selected' : '')}}>Presencial</option>
			<option value="online" {{(isset($registro->tipo) && $registro->tipo == 'online'  ? 'selected' : '') }}>On-Line</option>
		</select>
	</div>
</div>

<hr>



