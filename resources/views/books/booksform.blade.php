<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <style>
    body{
      padding-top: 30px;
      padding-left: 60px;
    }
  </style>
  <title>Adicionar livros</title>
</head>
<body>
 <form class="form-horizontal" method="POST" action="/books/add" id="addbook">
  {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Livros</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Título</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="Título" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="author">Autor</label>  
  <div class="col-md-4">
  <input id="author" name="author" type="text" placeholder="Autor" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="publisher">Editora</label>  
  <div class="col-md-4">
  <input id="publisher" name="publisher" type="text" placeholder="Editora" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-4">
    <textarea name="review" form="addbook" rows="3" cols="30">Adicione a resenha</textarea>
		</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Preço</label>  
  <div class="col-md-4">
  <input id="price" name="price" type="text" placeholder="Preço" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Ano</label>  
  <div class="col-md-4">
  <input id="year" name="year" type="text" placeholder="Ano" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Adicionar livro</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
<h3>{{$errors}}</h3>
  
</body>
</html>
