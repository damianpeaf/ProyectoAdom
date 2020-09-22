<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton|Montserrat&display=swap" rel="stylesheet">



    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilosh2.css">
    

<style>

  img{
    max-width: 25vw;
  }
</style>

</head>
<body>
    
    <header class="header">
    <?php
        include('header.php')
    ?>
    </header>

    <?php
        include('./inicioSesion.php');
    ?>

    <main />

    <table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sucursal</th>
      <th scope="col">Contacto</th>
      <th scope="col">Imagen</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sucursal1</th>
      <td class="text-left">
          <span class="font-weight-bold"> Correo: </span> sucursal1@empresa.com<br>
          <span class="font-weight-bold"> Telefono: </span> 12345678 <br>
          <span class="font-weight-bold"> Dirección: </span> 1ave 11-11 Zona 1.<br>
        </td>
        <td>
          <img src="./img/sucursal-1.png" >
        </td>
    </tr>
    <tr>
      <th scope="row">Sucursal2</th>
      <td class="text-left">
          <span class="font-weight-bold"> Correo: </span> sucursal2@empresa.com<br>
          <span class="font-weight-bold"> Telefono: </span> 12345678 <br>
          <span class="font-weight-bold"> Dirección: </span> 1ave 11-11 Zona 1.<br>
        </td>
        <td>
          <img src="./img/sucursal-1.png" >
        </td>
    </tr>
    <tr>
      <th scope="row">Sucursal3</th>
      <td class="text-left">
          <span class="font-weight-bold"> Correo: </span> sucursal3@empresa.com<br>
          <span class="font-weight-bold"> Telefono: </span> 12345678 <br>
          <span class="font-weight-bold"> Dirección: </span> 1ave 11-11 Zona 1.<br>
        </td>
        <td>
          <img src="./img/sucursal-1.png" >
        </td>
    </tr>
  </tbody>
</table>

</main>

</body>
</html>