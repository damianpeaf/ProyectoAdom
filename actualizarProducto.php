<?php

require_once('./php/conexion.php');


if (isset($_POST["btnAceptar"])) {

    $correo = $_POST["email"];
    $password = $_POST["password"];

    if (mysqli_query($cn,"INSERT into usuario values(null, '{$correo}', '{$password}', 3)")){
        echo "<script>
                alert('Registrado Correctamente');
                window.location.href='./index.php';
                </script>";
    }else{
        echo "<script>
                alert('Ocurrio algun error en el registro');
                window.location.href='./index.php';
                </script>";
    }
        
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>

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
        .bd-example {
            padding: 1.5rem !important;
            margin-right: 0 !important;
            margin-left: 0 !important;
            border-width: .2rem !important;
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

    <div class="bd-example">

        <form action="" name="formAceptar" method="post">
            <div class="form-group mx-auto">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <center>
                <button type="submit" name="btnAceptar" class="btn btn-primary">Registrarse</button>
            </center>

    </div>
    </form>
    </main>
</body>

</html>