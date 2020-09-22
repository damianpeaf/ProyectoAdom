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

  <style>
    .card-img-top {
      height: 20vh !important;
      width: auto !important;
      align-self: center;
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

  <br>
  <br>

  <?php

  include('./php/conexion.php');

  $inicio = 0;


  function verP($inicio)
  {




    $cn = mysqli_connect('localhost', 'root', '', 'adomicilio', '3306');

    $sql = mysqli_query($cn, "SELECT * FROM producto limit {$inicio}, 4");

    $sql2 = mysqli_query($cn, "SELECT * FROM producto");
    $numeroCampos = mysqli_num_rows($sql2);



    while ($res = mysqli_fetch_all($sql)) {


  ?>

      <div class="card-group">

        <?php
        for ($i = 0; $i < count($res); $i++) {
        ?>

          <div class="card">
            <img src="./img/productos/producto-1.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?= $res[$i][1] ?></h5>
              <p class="card-text">DESCRPCION: <?= $res[$i][2] ?></p>
              <p class="card-text">PRECIO: <?= $res[$i][3] ?></p>
              <a href="#" class="btn btn-primary">Añadir al carro</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Existencias: <?= $res[$i][4] ?></small>
            </div>
          </div>

        <?php
        }
        ?>
      </div>


  <?php

    }

    if ($inicio + 4 >= $numeroCampos) {
      // echo "termine";
    } else {
      verP($inicio + 4);
    }
  }

  $sql = verP(0);

  ?>






  </main>

</body>

</html>