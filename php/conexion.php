<?php

    // cambiar parametros para servidor local
    $cn = mysqli_connect('localhost', 'root', '', 'adomicilio', '3306');

    if (!$cn) {
        $error = mysqli_connect_error();
        echo " <script> alert('Hubo un error en la conexion al servidor, {$error}'); </script>";
        exit();
    }