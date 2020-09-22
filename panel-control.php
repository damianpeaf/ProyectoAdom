<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE CONTROL</title>

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
    include_once('./php/validacionUsuario.php');

    if ($userId == null || $userId == '') {
        echo "<script>
        alert('No hay ninguna sesion abierta');
        window.location.href='./index.php';
        </script>";
    }

    ?>
    
    <center>

    <br>
    <h3>Acciones</h3>
    <hr>

        <div class="row row-cols-1 row-cols-md-2">

            <div class="col mb-4">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Crear usuario</div>
                    <div class="card-body text-primary">
                        <p class="card-text">Crear Usuarios administradores o empleados</p>
                        <button type="button" class="btn btn-outline-primary">Crear</button>
                    </div>
                </div>

            </div>
            <div class="col mb-4">
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Crear Producto</div>
                    <div class="card-body text-success">
                        <p class="card-text">Ingresar producto para su visualizacion en la pagina principal</p>
                        <button type="button" class="btn btn-outline-success">Crear</button>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card border-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Eliminar</div>
                    <div class="card-body text-danger">
                        <p class="card-text">Eliminar producto para evitar que siga saliendo en la pagina principal</p>
                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card border-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Actualizar</div>
                    <div class="card-body text-warning">
                        <p class="card-text">Actualizar algun dato de la descripcion o disponibilidad</p>
                        <button type="button" class="btn btn-outline-warning">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </center>

</body>

</html>