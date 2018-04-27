@extends ('layout')
@section ('title')
  Lista Livros Autor
@stop

@section ('content')
  @foreach ($author as $thisAuthor)
    <h3 class="listbooks title" style="background-color:LemonChiffon;
      font-weight:bold">{{$thisAuthor->name}}</b> escreve da cidade de
    {{$thisAuthor->city}}</h3> <a href="/authors/edit/{{$thisAuthor->name}}">edit</a>
  <br><p>
    <b><h4 class="top-buffer">Biografia</h4></b>
<div class="lead listbooks">
{{$thisAuthor->bio}}
</div>
<p><b><h4 class="top-buffer">Obras</h4></b>
    @foreach ($thisAuthor->books as $book)
<ul>
    <li>  <h4 class="listbooks">{{$book['title']}}</h4></li>
</ul>
      @endforeach
<br>
  @endforeach
@stop
