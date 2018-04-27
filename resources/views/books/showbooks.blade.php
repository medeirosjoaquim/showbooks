<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Lista de  Livros</title>
    <style>
      body{
        padding-top:10px;
        padding-left:20px;
      }
    </style>
  </head>
  <body>
    <div class="d-flex justify-content-center links">
  <a href="/books/add">Add new book</a>
  <a href="/">Home</a>
  </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          @foreach ($books as $book)
            <div class="card border-dark mb-3 top-bufer style="width:150rem;">
              <img class="card-img-top" src="/openbook.svg" alt="Card image cap" width="50" height="50">

              <div class="card-header"><b>Título: </b>{{$book->title}}</div>
              <div class="card-body">
                <h5 class="card-title text-center"><strong>{{$book->author}}</strong></h5>
                <p class="card-text">
                  {{$book->review}}
                </div>
              </div>
            @endforeach
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <!-- col- elements here -->
          <h4> <a href="/books/add">Add more books</a></h4>
          <br>
        </div>
      </div>
    </body>
  </html>
