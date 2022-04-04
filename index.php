<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } else {
            require_once "conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
            $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$clave'");
            mysqli_close($conexion);
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $dato['idusuario'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('Location: src/');
            } else {
                $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Contraseña incorrecta
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                session_destroy();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/css/material-dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css/all.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->


    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
    <img class="wave" src="assets/img/wave.png" alt="">
    <div class="contenedor">

        <div class="img">
            <img src="assets/img/imagen_login.png" alt="" />
        </div>

        <div class="contenido-login">
            <form action="" method="post">
                <img src="assets/img/icono_login.png" alt="" />
                <h2>Farmacia</h2>
                <div class="form-group input-div dni">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>User</h5>
                        <input type="text" class="input" id="exampleInputEmail1" name="usuario">
                    </div>
                </div>
                <div class="form-group input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>

                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" id="exampleInputPassword1" name="clave">
                    </div>
                </div>
                <a href="">Jose Gabriel JR</a>
                <input  class="btn text-center" type="submit" value="Iniciar Sesion" > 
        </div>

        </form>
    </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/js/material-dashboard.js"></script>
    <script src="assets/js/login.js"></script>
    <!-- endinject -->
</body>


</html>