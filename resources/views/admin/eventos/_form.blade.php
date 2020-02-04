<div class="form-group row">
	<label for="titulo" class="col-md-3 col-form-label text-md-right"><b>Título</b></label>
	<div class="col-md-9">
		<input type="text" class="form-control  text-capitalize" name="titulo" placeholder="" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}" required autocomplete="titulo" autofocus>
		<div class="invalid-feedback">
			Informe um título para o evento
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="descricao" class="col-md-3 col-form-label text-md-right"><b>Descrição</b></label>
	<div class="col-md-9">
		<input type="text" class="form-control" name="descricao" maxlength="150" placeholder="" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required>
		<div class="invalid-feedback">
			Descreva o evento em poucas palavras.
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="data" class="col-md-3 col-form-label text-md-right"><b>Data</b></label>
	<div class="col-md-3">
		<input type="date" class="form-control" name="data" placeholder="" value="{{ isset($registro->data) ? $registro->data : '' }}" required>
		<div class="invalid-feedback">
			Informe a data do evento.
		</div>
	</div>
	<label for="hora" class="col-md-3 col-form-label text-md-right"><b>Hora</b></label>
	<div class="col-md-3">
		<input type="time" class="form-control" name="hora" placeholder="" value="{{ isset($registro->hora) ? $registro->hora : '' }}" required>
		<div class="invalid-feedback">
			Informe a hora do evento.
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="local" class="col-md-3 col-form-label text-md-right"><b>Local</b></label>
	<div class="col-md-9">
		<input type="text" class="form-control text-capitalize" name="local" placeholder="" value="{{ isset($registro->local) ? $registro->local : '' }}" required>
		<div class="invalid-feedback">
			Informe o local do evento
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="endereco" class="col-md-3 col-form-label text-md-right"><b>Endereço</b></label>
	<div class="col-md-9">
		<input type="text" class="form-control text-capitalize" name="endereco" placeholder="" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" required>		
		<div class="invalid-feedback">
			Informe o endereço do local do evento
		</div>

	</div>	
</div>

<div class="form-group row">
	<label for="cidade" class="col-md-3 col-form-label text-md-right"><b>Cidade</b></label>
	<div class="col-md-3">
	   <select name="cidade_id" class="form-control">
	   		<option value="">Selecione a cidade...</option>
	        @foreach($cidades as $cidade)
	            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
	        @endforeach
	    </select>
		<div class="invalid-feedback">
			Selecione o nome da cidade na lista
		</div>
	</div>	

	<label for="bairro" class="col-md-3 col-form-label text-md-right"><b>Bairro</b></label>
	<div class="col-md-3">
		<input type="text" class="form-control text-capitalize" name="bairro" placeholder="" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" required>
		<div class="invalid-feedback">
			Informe o bairro.
		</div>
	</div>	
</div>


<div class="form-group row">
	<label for="imagem" class="col-md-3 col-form-label text-md-right"><b>Imagem</b></label>
	<div class="col-md-5">
		<input type="file" class="form-control-file" name="imagem">
	</div>
	<div class="col-md-4">
		@if(isset($registro->imagem))
			<img width="120" src="{{ asset($registro->imagem) }}">
		@endif
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3 col-form-label text-md-right"><b>Mapa</b></label>
	<div class="col-md-9">
		<textarea class="form-control" name="mapa" rows="6">
			{{(isset($registro->mapa) ? $registro->mapa : '')}}
		</textarea>
		<label>(Cole o iframe do Google Maps)</label>
	</div>
</div>

<div class="form-group row">
	<label for="ordem" class="col-md-3 col-form-label text-md-right"><b>Ordem</b></label>
	<div class="col-md-3">
		<input type="text" class="form-control" name="ordem" placeholder="" value="{{ isset($registro->ordem) ? $registro->ordem : '' }}" required>
		<small>Coloque a ordem que o evento deve aparecer na lista</small>
		<div class="invalid-feedback">
			Informe a ordem que o evento deve aparecer na lista
		</div>
	</div>

	<label for="publicar" class="col-sm-3 col-form-label text-md-right"><b>Publicar?</b></label>
	<div class="col-sm-3">
		<select name="publicar" class="form-control">
			<option value="n" {{(isset($registro->publicar) && $registro->publicar == 'n'  ? 'selected' : '')}}>Não</option>
			<option value="s" {{(isset($registro->publicar) && $registro->publicar == 's'  ? 'selected' : '')}}>Sim</option>
		</select>
	</div>
</div>
<hr>
