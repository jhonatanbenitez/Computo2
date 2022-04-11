<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
    <h1 class="bg-primary text-white text-center"> Crud con laravel</h1>

<div class="container">
<h2>Agregar registro</h2>
<form action="/menu" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" >
  </div>
  <div class="form-group">
    <label for="">Entradas</label>
    <input type="text" class="form-control" id="entradas" name="entradas">
  </div>
  <div class="form-group">
    <label for="">Comida</label>
    <input type="text" class="form-control" id="comida" name="comida" >
  </div>
  <div class="form-group">
    <label for="">Bebidas</label>
    <input type="text" class="form-control" id="bebidas" name="bebidas" >
  </div>
  <div class="form-group">
    <label for="">Postres</label>
    <input type="text" class="form-control" id="postres" name="postres" >
  </div>
  <div class="form-group">
    <label for="">cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" >
  </div>
  <div class="form-group">
    <label for="">Precio</label>
    <input type="number" step="any" value="0.00" class="form-control" id="precio" name="precio" >
  </div>
  <a href="/menu" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
      

      
    </div>
   

 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  
</html>