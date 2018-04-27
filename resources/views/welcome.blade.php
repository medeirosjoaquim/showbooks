<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Casa do Livro</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  </head>
  <body>
    <br>

    <div class="flex-center">
      <img src="books.svg" width="100">
    </div>
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
        <div class="top-right links">
          @auth
            <a href="{{ url('/home') }}">Home</a>
          @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
          @endauth
        </div>
      @endif

      <div class="content">
        <div class="title m-b-md">
          Casa do Livro
        </div>

        <div class="links">
          <a href="authors">Autores</a>
          <a href="/books/list">Catálogo</a>
          <a href="https://laravel-news.com">A Editora</a>
          <a href="https://github.com/laravel/laravel">Contato</a>
        </div>
      </div>
    </div>
  </body>
</html>
