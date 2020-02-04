<input type="hidden" name="usuario_id" value="{{ isset($registro->usuario_id) ? $registro->usuario_id : '' }}">
<input type="hidden" name="icone" value="{{ isset($registro->icone) ? $registro->icone : '' }}">

<div class="form-group row">
    <label for="titulo" class="col-md-3 col-form-label text-md-right"><b>Título</b></label>
    <div class="col-md-9">
        <input id="titulo" type="text" class="form-control" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}" autofocus required onkeyup="maiuscula(this)">
    </div>
</div>

<div class="form-group row">
	<label for="curso" class="col-sm-3 col-form-label text-md-right"><b>Curso</b></label>
	<div class="col-sm-9">
	   <select name="curso_id" class="form-control" required>
	        @foreach($cursos as $curso)
	            <option value="{{ $curso->id }}" {{(isset($curso->curso_id) && $curso->curso_id == $curso->id  ? 'selected' : '')}}>{{ $curso->titulo }}</option>
	        @endforeach
	    </select>
	</div>
</div>	


<div class="form-group row">	
	<div class="col-md-3">
		@if(isset($registro->filenames))
			<img width="120" src="{{ asset($registro->filenames) }}">
		@endif
	</div>
	<div class="col-md-9">
		<label for="filenames" class="control-label"></label>
		<input id="filenames" type="file" class="form-control-file" name="filenames">
	</div>
</div>