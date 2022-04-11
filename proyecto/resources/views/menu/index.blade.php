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
    <h1 class="bg-info text-black text-center"> Crud con laravel</h1>

    <div class="container">
        <a href="menu/create" class="btn btn-primary bg-success">Agregar</a>
        <table class="table table-dark table-striped mt-4">
       <thead>
         <tr>
           <th scope="col">ID</th>
           <th scope="col">Codigo</th>
           <th scope="col">Entradas</th>
           <th scope="col">Comida</th>
           <th scope="col">Bebidas</th>
           <th scope="col">Postres</th>
           <th scope="col">Cantida</th>
           <th scope="col">Precio</th>
           <th scope="col">Acciones</th>
         </tr>
       </thead> 
       <tbody>
         @foreach($menus as $menu)
         <tr>
           <td>{{$menu->id}}</td>
           <td>{{$menu->codigo}}</td>
           <td>{{$menu->entradas}}</td>
           <td>{{$menu->comida}}</td>
           <td>{{$menu->bebidas}}</td>
           <td>{{$menu->postres}}</td>
           <td>{{$menu->cantidad}}</td>
           <td>{{$menu->precio}}</td>
           <td>
           <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
           <a href='/menu/{{$menu->id}}/edit'   class="btn btn-info">Editar</a>
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>          
          
           </td>
         </tr>   
         @endforeach

        </tbody>

</table>
      
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