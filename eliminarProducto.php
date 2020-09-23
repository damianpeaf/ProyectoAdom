<?php

require_once('./php/conexion.php');

if (isset($_POST["btnAceptar"])) {

    $idProducto = $_POST["idProducto"];


if (mysqli_query($cn, "DELETE FROM producto where idProducto={$idProducto}")) {
        echo "<script>
                alert('Registrado eliminado correctamente');</script>";
    } else {
        echo "<script> alert('Hubo algun error en el registro ');</script>";
    }
}


if (isset($_POST["btnActualizar"])) {

    $idProducto = $_POST["idProducto"];

    if ($sql = mysqli_query($cn, "SELECT * FROM producto where idProducto = {$idProducto}")) {
        while ($res = mysqli_fetch_array($sql) ) {
            
            $nombre = $res[1];
            $descripcion = $res[2];
            $precio = $res[3];
            $stock = $res[4];
        }
    }else{
        echo "<script> alert('Registro no encontrado');</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar producto</title>

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
                <label for="exampleInputEmail1">ID</label>
                <input class="form-control" value="<?php if (isset($idProducto)) echo $idProducto;  ?>" name="idProducto" type="text" placeholder="ID">
            </div>
            <div class="form-group mx-auto">
                <label for="exampleInputEmail1">Nombre</label>
                <input class="form-control"  value="<?php if (isset($nombre)) echo $nombre;  ?>" name="nombre" type="text" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control"  name="descripcion" id="exampleFormControlTextarea1" rows="3"><?php if (isset($descripcion)) echo $descripcion;  ?></textarea>
            </div>
            <div class="form-group mx-auto">
                <label for="exampleInputEmail1">Precio</label>
                <input class="form-control" value="<?php if (isset($precio)) echo $precio;  ?>" name="precio" type="text" placeholder="Precio">
            </div>
            <div class="form-group mx-auto">
                <label for="exampleInputEmail1">Stock</label>
                <input class="form-control" name="stock" value="<?php if (isset($stock)) echo $stock;  ?>" type="text" placeholder="Stock">
            </div>
            <center>
                <button type="submit" name="btnAceptar" class="btn btn-primary">Eliminar</button>
                <button type="submit" name="btnActualizar" class="btn btn-primary">Buscar</button>

            </center>

    </div>
    </form>
    </main>
</body>

</html>