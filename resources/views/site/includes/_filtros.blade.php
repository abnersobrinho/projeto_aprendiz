<form action="{{ route('busca') }}">	
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="tipo">Tipo</label>
			<select name="tipo" class="form-control" required>
				<option {{ isset($busca['tipo']) && $busca['tipo'] == 'todos' ? 'selected' : '' }} value="todos">Presencial e On-line</option>
				<option {{ isset($busca['tipo']) && $busca['tipo'] == 'presencial' ? 'selected' : '' }} value="presencial">Presencial</option>
				<option {{ isset($busca['tipo']) && $busca['tipo'] == 'online' ? 'selected' : '' }} value="online">On-line</option>
			</select>
		</div>

		<div class="form-group col-sm-7">
			<label>Título</label>
			<input class="form-control" type="text" name="titulo" value="{{ isset($busca['titulo'])  ? $busca['titulo'] : '' }}">
		</div>

		<div class="form-group row">
			<div class="col-md-2">
				<label>&nbsp;</label>
				<button type="submit" class="btn btn-primary ml-2">Filtrar</button>
			</div>
		</div>
	</div>
</form>