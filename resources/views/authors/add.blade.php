@extends ('layout')

@section ('title')
Adicionar Autor
@stop
@section ('content')
	<form class="form-horizontal" method="POST" action="/authors/add" id="add-author">
		{{ csrf_field() }}
		<fieldset>

			<!-- Form Name -->
			<legend><b>Autores<b></legend>
<br>
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="title">Nome</label>  
				<div class="col-md-4">
					<input id="title" name="name" type="text" placeholder="Nome" class="form-control input-md" required="">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="author">Cidade</label>  
				<div class="col-md-4">
					<input id="author" name="city" type="text" placeholder="Cidade" class="form-control input-md">
				</div>
			</div>
			<!-- Text input-->
			<div class="form-group">
				<div class="col-md-4">
					<textarea name="bio" form="add-author" rows="3" cols="30" placeholder="Biografia"></textarea>
				</div>
			</div>
			<!-- Button -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit">Adicionar Autor</label>
				<div class="col-md-4">
					<button id="submit" name="submit" class="btn btn-primary">Enviar</button>
				</div>
			</div>

		</fieldset>
	</form>

@stop
