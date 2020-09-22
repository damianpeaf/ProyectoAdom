<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>


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

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sucursal</th>
      <th scope="col">Horario</th>
 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sucursal1</th>
      <td>
          Lunes: 8:00 a 20:00<br>
          Martes: 8:00 a 20:00 <br>
          Miercoles: 8:00 a 20:00<br>
          Jueves: 8:00 a 20:00<br>
          Viernes: 8:00 a 20:00<br>
          Sabado: 8:00 a 20:00<br>
          Domingo: 8:00 a 20:00<br>
        </td>
    </tr>
    <tr>
      <th scope="row">Sucursal2</th>
      <td>
          Lunes: 8:00 a 20:00<br>
          Martes: 8:00 a 20:00 <br>
          Miercoles: 8:00 a 20:00<br>
          Jueves: 8:00 a 20:00<br>
          Viernes: 8:00 a 20:00<br>
          Sabado: 8:00 a 20:00<br>
          Domingo: 8:00 a 20:00<br>
        </td>
    </tr>
    <tr>
      <th scope="row">Sucursal3</th>
      <td>
          Lunes: 8:00 a 20:00<br>
          Martes: 8:00 a 20:00 <br>
          Miercoles: 8:00 a 20:00<br>
          Jueves: 8:00 a 20:00<br>
          Viernes: 8:00 a 20:00<br>
          Sabado: 8:00 a 20:00<br>
          Domingo: 8:00 a 20:00<br>
        </td>
    </tr>
  </tbody>
</table>

</main>

</body>
</html>