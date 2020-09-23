<?php

require_once('./php/conexion.php');

if (isset($_POST["btnAceptar"])) {

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];

    $archivosPermitidos = array('image/png', 'image/jpeg');
    $pesoMaximo = 5000;
    $target_path = "";
    #CODIGO DE SUBIDA DE ARCHIVOS

    foreach ($_FILES["archivo"]['tmp_name'] as $key => $tmp_name) {

        if ($_FILES["archivo"]["error"][$key]) {
            echo "<script> alert('Error al cargar archivo/s'); </script>";
        } else {

            if (in_array($_FILES["archivo"]["type"][$key], $archivosPermitidos) && $_FILES["archivo"]["size"][$key] <= $pesoMaximo * 1024) {
                if ($_FILES["archivo"]["name"][$key]) {
                    $filename = $_FILES["archivo"]["name"][$key];
                    $source = $_FILES["archivo"]["tmp_name"][$key];

                    $directorio = './img/productos';

                    $dir = opendir($directorio);
                    $target_path = $directorio . '/' . $filename;

                    if (!file_exists($target_path)) {
                    } else {
                        echo "<script> alert('El archivo " . $filename . " ya está guardado. Por favor cambie el nombre si cree que es incorrecto'); </script>";
                    }

                    if (move_uploaded_file($source, $target_path)) {

                        echo "<script> alert('El archivo " . $filename . " se ha almacenado en forma exitosa'); </script>";

                    } else {
                        echo "<script> alert('Ha ocurrido un error, por favor inténtelo de nuevo.<br>'); </script>";
                    }
                    closedir($dir);
                }
            } else {
                echo "<script> alert('El archivo " . $filename . " no permitido, o es demasiado pesado'); </script>";
            }
        }
    }
    #FIN CODIGO DE SUBIDA DE ARCHIVOS

    if (mysqli_query($cn, "INSERT into producto values(null, '{$nombre}', '{$descripcion}', {$precio}, {$stock}, '{$target_path}' )")) {
        echo "<script>
                alert('Registrado Correctamente');</script>";
    } else {
        echo "<script> alert('Hubo algun error en el registro ');</script>";
                
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar producto</title>

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
        include('header.php');

        if ($userId == null || $userId == '' || $userId == 3) {
            echo "<script>
                alert('No hay ninguna sesion abierta como personal');
                window.location.href='./index.php';
                </script>";
        }

        ?>
    </header>

    <?php
    include('./inicioSesion.php');
    ?>

    <div class="bd-example">

        <form action="" name="formAceptar" method="post" enctype="multipart/form-data">
            <div class="form-group mx-auto">
                <label for="exampleInputEmail1">Nombre</label>
                <input class="form-control" name="nombre" type="text" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group mx-auto">
                <label for="exampleInputEmail1">Precio</label>
                <input class="form-control" name="precio" type="text" placeholder="Precio">
            </div>
            <div class="form-group mx-auto">
                <label for="exampleInputEmail1">Stock</label>
                <input class="form-control" name="stock" type="text" placeholder="Stock">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Imagen</label>
                <input type="file" name="archivo[]" multiple="" accept=".jpg, .png" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <center>
                <button type="submit" name="btnAceptar" class="btn btn-primary">Registrarse</button>
            </center>

    </div>
    </form>
    </main>
</body>

</html>