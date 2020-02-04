<input type="hidden" class="form-control" name="usuario_id" value="{{ Auth::user()->id }}">
<input type="hidden" class="form-control" name="usu_nome" value="{{ Auth::user()->nome }}">
<input type="hidden" class="form-control" name="usu_email" value="{{ Auth::user()->email }}">
<input type="hidden" class="form-control" name="usu_celular" value="{{ Auth::user()->celular}}">
<input type="hidden" class="form-control" name="usu_avatar" value="{{ Auth::user()->avatar}}">

<div class="input-field">				
	<div class="form-group row">
		<label for="titulo" class="col-sm-3 control-label text-md-right"><b>Título</b></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}" onkeyup="maiuscula(this)" required autofocus>
			<div class="invalid-feedback">
				Por favor, informe o nome da turma
			</div>
		</div>
	</div>
</div>

<div class="input-field">
	<div class="form-group row">
		<label for="curso_id" class="col-sm-3 col-form-label text-md-right"><b>Curso</b></label>
		<div class="col-sm-9">
		   <select name="curso_id" class="form-control" required>
		   		<option value="">Selecione o curso</option>
		        @foreach($cursos as $curso)
		            <option value="{{ $curso->id }}" {{(isset($registro->curso_id) && $registro->curso_id == $curso->id  ? 'selected' : '')}}>{{ $curso->titulo }}</option>
		        @endforeach
		    </select> 
		    <div class="invalid-feedback">
				Selecione o curso na lista
			</div>
		</div>	
	</div>
</div>

<div class="input-field">				
	<div class="form-group row">
		<label for="datain" class="col-sm-3 control-label text-md-right"><b>Início das aulas</b></label>
		<div class="col-sm-3">
			<input type="date" class="form-control" name="datain" id="datain" placeholder="" value="{{ isset($registro->datain) ? $registro->datain : ''}}" required>
			<div class="invalid-feedback">
				Por favor, informe a data de início das aulas
			</div>
		</div>

		<label for="datafim" class="col-sm-3 control-label text-md-right"><b>Fim das aulas</b></label>
		<div class="col-sm-3">
			<input type="date" class="form-control" name="datafim" id="datafim" placeholder="" value="{{ isset($registro->datafim) ? $registro->datafim : ''}}" required>
			<div class="invalid-feedback">
				Por favor, informe a data de previsão de fim das aulas
			</div>
		</div>
	</div>
</div>

<div class="input-field">				
	<div class="form-group row">
		<label for="dia" class="col-sm-3 control-label text-md-right"><b>Dia da aula</b></label>
		<div class="col-sm-3">
			<select name="dia" id="dia" class="form-control">
				<option value="">Selecione o dia</option>
				<option value="Domingo" {{(isset($registro->dia) && $registro->dia == 'Domingo'  ? 'selected' : '')}}>Domingo</option>
				<option value="Segunda-feira" {{(isset($registro->dia) && $registro->dia == 'Segunda-feira'  ? 'selected' : '')}}>Segunda-feira</option>
				<option value="Terça-feira" {{(isset($registro->dia) && $registro->dia == 'Terça-feira'  ? 'selected' : '')}}>Terça-feira</option>
				<option value="Quarta-feira" {{(isset($registro->dia) && $registro->dia == 'Quarta-feira'  ? 'selected' : '')}}>Quarta-feira</option>
				<option value="Quinta-feira" {{(isset($registro->dia) && $registro->dia == 'Quinta-feira'  ? 'selected' : '')}}>Quinta-feira</option>
				<option value="Sexta-feira" {{(isset($registro->dia) && $registro->dia == 'Sexta-feira'  ? 'selected' : '')}}>Sexta-feira</option>
				<option value="Sábado" {{(isset($registro->dia) && $registro->dia == 'Sábado'  ? 'selected' : '')}}>Sábado</option>
			</select>
		</div>

		<label for="datain" class="col-sm-3 control-label text-md-right"><b>Horário</b></label>
		<div class="col-sm-3">
			<input type="time" class="form-control" name="horario" id="horario" placeholder="Horário" value="{{ isset($registro->horario) ? $registro->horario : ''}}" required>
			<div class="invalid-feedback">
				Por favor, informe o horário das aulas
			</div>
		</div>
	</div>
</div>
				
<div class="input-field">
	<div class="form-group row">
		<label for="local" class="col-sm-3 control-label text-md-right"><b>Local</b></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="local" id="local" placeholder="Local das aulas" value="{{ isset($registro->local) ? $registro->local : ''}}" onkeyup="maiuscula(this)" required autofocus>
			<div class="invalid-feedback">
				Por favor, informe o local das aulas
			</div>
		</div>
	</div>
</div>

<div class="input-field">
	<div class="form-group row">
		<label for="informacoes" class="col-sm-3 control-label text-md-right"><b>Outras Informações</b></label>
		<div class="col-sm-9">
			<textarea class="form-control" name="informacoes" rows="3">
				{{(isset($registro->informacoes) ? $registro->informacoes : '')}}
			</textarea>
			<label>(Escreva aqui outras informações referente ao curso)</label>
		</div>
	</div>
</div>

<div class="input-field">
	<div class="form-group row">
		<label for="imagem" class="col-sm-3 control-label text-md-right"><b>Mapa</b></label>
		<div class="col-sm-9">
			<textarea name="mapa" class="form-control" rows="3">
		    	{{(isset($registro->mapa) ? $registro->mapa : '')}}
			</textarea>
		    <label>Mapa (Cole o iframe do Google Maps)</label>
		</div>
	</div>
</div>

<div class="input-field">
	<div class="form-group row">
		<label for="imagem" class="col-sm-3 control-label text-md-right"><b>Imagem</b></label>
		<div class="col-sm-4">
			<input id="imagem" type="file" class="form-control-file" name="imagem" id="imagem">
		</div>
		<div class="col-sm-5">
			@if(isset($registro->imagem))
				<img width="120" src="{{ asset($registro->imagem)}}">
			@endif
		</div>
	</div>
</div>

<div class="input-field">
	<div class="form-group row align-items-center">
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
				<option value="p" {{(isset($registro->tipo) && $registro->tipo == 'p'  ? 'selected' : '')}}>Presencial</option>
				<option value="o" {{(isset($registro->tipo) && $registro->tipo == 'o'  ? 'selected' : '')}}>Online</option>
			</select>
		</div>
	</div>
</div>



