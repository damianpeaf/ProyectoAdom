    <?php

require_once './conexion.php';

$error = null;

// verificacion


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) { //Chequea si se accedió por medio de POST


    $username = $_POST["email"];
    $password = $_POST["password"];

    if ($username == '' || $username == null) {
        $error = "*Debe escribir algo en el campo username*";
    } elseif ($password == '' || $password == null) {
        $error = "*Debe escribir algo en el campo password*";
    } else {

        if ($stmt = mysqli_prepare($cn, "SELECT * FROM usuario WHERE correo = ? and contraseña = ?")) {


            mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $numUsuarios = mysqli_num_rows($result);

            if ($numUsuarios > 0) {


                $counter = 0;

                while ($row = mysqli_fetch_array($result)) {
                        session_start();

                        $_SESSION = $row;
                        unset($_SESSION['contraseña']);
                        $_SESSION['userType'] = $row['idTipoUsuario'];

                        if ($_SESSION['userType'] == 1 || $_SESSION['userType'] == 2) {

                            echo "<script>
                            alert('BIENVENIDO {$_SESSION[1]}');
                            window.location.href='../panel-control.php';
                            </script>";

                        }else{
                            echo "<script>
                            alert('BIENVENIDO {$_SESSION[1]}');
                            window.location.href='../index.php';
                            </script>";
                        }


                }
                
            } else {
                $error = "Usuario incorrecto o contraseña incorrecta*";
            }
        }
    }


}

if ($error != null){
    echo "<script>
    alert('{$error}');
    window.location.href='../index.php';
    </script>";
}

?>
  