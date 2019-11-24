<div class="form-group row">
	<label for="nome" class="col-sm-2 control-label"><b>Nome</b></label>
	<div class="col-sm-5">
		<input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}" onkeyup="maiuscula(this)" required>
		<div class="invalid-feedback">
			Por favor, informe o nome da igreja. Por exemplo ICM Valepar.
		</div>
	</div>	
	<label for="area" class="col-sm-1 control-label"><b>Área</b></label>
	<div class="col-sm-4">
	   <select name="area_id" class="form-control" required>
	        @foreach($areas as $area)
	            <option value="{{ $area->id }}" {{(isset($registro->area_id) && $registro->area_id == $area->id  ? 'selected' : '')}}>{{ $area->titulo }}</option>
	        @endforeach
	    </select>
	    <div class="invalid-feedback">
			Por favor, selecione a área que a igreja faz parte
		</div>
	</div>
</div>

<div class="form-group row">
	<label for="endereco" class="col-sm-2 control-label"><b>Endereço</b></label>
	<div class="col-sm-5">
		<input type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" onkeyup="maiuscula(this)" required>
		<div class="invalid-feedback">
			Por favor, informe o endereço da igreja
		</div>
	</div>	
	<label for="cep" class="col-sm-1 control-label"><b>CEP</b></label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="cep" placeholder="Digite o CEP" value="{{ isset($registro->cep) ? $registro->cep : '' }}" required>
		<div class="invalid-feedback">
			Por favor, informe o CEP da igreja
		</div>
	</div>	
</div>

<div class="form-group row">
	<label for="cidade" class="col-sm-2 control-label"><b>Cidade</b></label>
	<div class="col-sm-5">
	   <select name="cidade_id" class="form-control" required>
	        @foreach($cidades as $cidade)
	            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
	        @endforeach
	    </select>
	    <div class="invalid-feedback">
			Por favor, selecione a cidade da igreja na lista
		</div>
	</div>	

	<label for="bairro" class="col-sm-1 control-label"><b>Bairro</b></label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="bairro" placeholder="Informe o bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" onkeyup="maiuscula(this)" required>
		<div class="invalid-feedback">
			Por favor, informe o bairro da igreja
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
		<textarea class="form-control" name="mapa" rows="3">
			{{(isset($registro->mapa) ? $registro->mapa : '')}}
		</textarea>
		<label>(Cole o iframe do Google Maps)</label>
	</div>
</div>
