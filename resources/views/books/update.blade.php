@extends ('layout')

@section ('title')
  Adicionar Autor
@stop
@section ('content')
  <form method="POST" action="/books/update/{{ $book->name }}" id="edit-author">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <fieldset>
      <!-- Form Name -->
      <legend><b>Autores<b></legend>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="name">Nome:</label>  
            <div class="col-md-4">
              <input id="title" name="name" type="text" value="{{$book->title}}"
              placeholder="" class="form-control input-md" required="">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="city">Cidade</label>  
            <div class="col-md-4">
              <input id="author" name="city" type="text"
              placeholder="" value="{{$author->city}}" class="form-control input-md"></div>
          </div>
          <!-- Text input-->
          <div class="form-group">
        <label class="col-md-4 control-label" for="bio">Bio</label>
            <div class="col-md-4">
              <textarea name="bio" form="edit-author" rows="3" cols="30"
                value="">{{$author->bio}}</textarea>
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
