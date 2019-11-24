<div class="form-group row">
	<label for="titulo" class="col-sm-2 control-label"><b>Título</b></label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="titulo" placeholder="Digite o titulo do evento" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe o título do evento
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="descricao" class="col-sm-2 control-label"><b>Descrição</b></label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="descricao" placeholder="Descrição do evento" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe a descrição do evento
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="data" class="col-sm-2 control-label"><b>Data</b></label>
	<div class="col-sm-4">
		<input type="date" class="form-control" name="data" placeholder="Data do evento" value="{{ isset($registro->data) ? $registro->data : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe a data do evento
		</div>
	</div>
	<label for="hora" class="col-sm-1 control-label"><b>Hora</b></label>
	<div class="col-sm-4">
		<input type="time" class="form-control" name="hora" placeholder="Hora do evento" value="{{ isset($registro->hora) ? $registro->hora : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe a hora do evento
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="local" class="col-sm-2 control-label"><b>Local</b></label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="local" placeholder="Digite o local do evento" value="{{ isset($registro->local) ? $registro->local : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe o local do evento
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="endereco" class="col-sm-2 control-label"><b>Endereço</b></label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="endereco" placeholder="Digite o Endereço do evento" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" required>		<div class="invalid-feedback">
			Por favor, informe o endereço do local do evento
		</div>

	</div>	
</div>

<div class="form-group row">
	<label for="cidade" class="col-sm-2 control-label"><b>Cidade</b></label>
	<div class="col-sm-5">
	   <select name="cidade_id" class="form-control">
	        @foreach($cidades as $cidade)
	            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
	        @endforeach
	    </select>
		<div class="invalid-feedback">
			Por favor, selecione o nome da cidade na lista
		</div>
	</div>	

	<label for="bairro" class="col-sm-1 control-label"><b>Bairro</b></label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="bairro" placeholder="Informe o bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe o bairro
		</div>
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

<div class="form-group row">
	<div class="col-sm-2">
		<label><b>Mapa</b></label>
	</div>
	<div class="col-sm-10">
		<textarea class="form-control" name="mapa" rows="5">
			{{(isset($registro->mapa) ? $registro->mapa : '')}}
		</textarea>
		<label>(Cole o iframe do Google Maps)</label>
	</div>
</div>

<div class="form-group row">
	<label for="ordem" class="col-sm-2 control-label"><b>Ordem</b></label>
	<div class="col-sm-2">
		<input type="text" class="form-control" name="ordem" placeholder="Ordem que o evento deve aparecer na lista" value="{{ isset($registro->ordem) ? $registro->ordem : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe a ordem que o evento deve aparecer na lista
		</div>
	</div>

	<div class="col-sm-2">
		<label for="publicar" class="control-label"><b>Publicar?</b></label>
	</div>
	<div class="col-sm-2">
		<select name="publicar" class="form-control">
			<option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
			<option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
		</select>
	</div>
</div>
