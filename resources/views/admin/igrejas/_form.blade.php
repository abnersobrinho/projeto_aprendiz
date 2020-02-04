<div class="form-group row">
	<label for="nome" class="col-sm-2 col-form-label text-md-right"><b>Nome</b></label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="nome" placeholder="" value="{{ isset($registro->nome) ? $registro->nome : '' }}" onkeyup="maiuscula(this)" required autocomplete="nome" autofocus>
		<div class="invalid-feedback">
			Informe o nome da igreja. Por exemplo ICM Valepar.
		</div>
	</div>	
	<label for="area" class="col-sm-2 col-form-label text-md-right"><b>Área</b></label>
	<div class="col-sm-4">
	   <select name="area_id" class="form-control" required>
   			<option value="">Selecione a área</option>
	        @foreach($areas as $area)
	            <option value="{{ $area->id }}" {{(isset($registro->area_id) && $registro->area_id == $area->id  ? 'selected' : '')}}>{{ $area->titulo }}</option>
	        @endforeach
	    </select>
	    <div class="invalid-feedback">
			Selecione a área que a igreja faz parte.
		</div>
	</div>
</div>

<div class="form-group row">
	<label for="endereco" class="col-sm-2 col-form-label text-md-right"><b>Endereço</b></label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="endereco" placeholder="" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" onkeyup="maiuscula(this)" required>
		<div class="invalid-feedback">
			O endereço da igreja é obrigatório.
		</div>
	</div>	
	<label for="cep" class="col-sm-2 col-form-label text-md-right"><b>CEP</b></label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="cep" placeholder="" value="{{ isset($registro->cep) ? $registro->cep : '' }}" required>
		<div class="invalid-feedback">
			O CEP da igreja é obrigatório.
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="cidade" class="col-sm-2 col-form-label text-md-right"><b>Cidade</b></label>
	<div class="col-sm-4">
	   <select name="cidade_id" class="form-control" required>
	   		<option value="">Selecione a cidade</option>
	        @foreach($cidades as $cidade)
	            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
	        @endforeach
	    </select>
	    <div class="invalid-feedback">
			Selecione a cidade da igreja na lista
		</div>
	</div>	

	<label for="bairro" class="col-sm-2 col-form-label text-md-right"><b>Bairro</b></label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="bairro" placeholder="" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" onkeyup="maiuscula(this)" required>
		<div class="invalid-feedback">
			Informe o bairro da igreja
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="imagem" class="col-sm-2 col-form-label text-md-right"><b>Imagem</b></label>
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
	<label class="col-sm-2 col-form-label text-md-right"><b>Mapa</b></label>
	<div class="col-sm-10">
		<textarea class="form-control" name="mapa" rows="3">
			{{(isset($registro->mapa) ? $registro->mapa : '')}}
		</textarea>
		<label>(Cole o iframe do Google Maps)</label>
	</div>
</div>
<hr>
