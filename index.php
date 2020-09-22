<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton|Montserrat&display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilosh.css">

    <title>nombreproyecto</title>
  </head>
  <body class="bg-dark">
   
        <header class="header">


        <?php include('header.php') ?>
        
        <div class="text-header d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <p>Slogan: Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, provident minima tempore laboriosam sed reiciendis impedit non deleniti dicta ad</p>
                        <a href="./Productos.php" class="btn btn-yo"> <span>Ver productos</span> </a>
                    </div>


                    <!-- Cambiar el video poniendo la direccion del video publicitario -->
                    <video src="./videos/fondo.mp4" autoplay loop muted poster="./videos/poster.png"/>

                </div>
            </div>
        </div>

    </header>


    <?php include('./inicioSesion.php'); ?>
    
  </body>
</html>