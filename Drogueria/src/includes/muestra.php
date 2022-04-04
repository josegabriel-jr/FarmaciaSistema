<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <div class="sidebar" data-color="" data-background-color="" data-image="../assets/img/sidebar.jpg">
            <div class="logo bg-primary"><a href="./" class="simple-text logo-normal">
                    Farmacia
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="usuarios.php">
                            <i class="fas fa-user mr-2 fa-2x"></i>
                            <p> Usuarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="config.php">
                            <i class="fas fa-cogs mr-2 fa-2x"></i>
                            <p> Configuración</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="tipo.php">
                            <i class=" fas fa-tags mr-2 fa-2x"></i>
                            <p> Tipos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="presentacion.php">
                            <i class=" fas fa-list mr-2 fa-2x"></i>
                            <p> Presentación</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="laboratorio.php">
                            <i class=" fas fa-hospital mr-2 fa-2x"></i>
                            <p> Laboratorios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="productos.php">
                            <i class="fab fa-product-hunt mr-2 fa-2x"></i>
                            <p> Productos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="clientes.php">
                            <i class=" fas fa-users mr-2 fa-2x"></i>
                            <p> Clientes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="ventas.php">
                            <i class="fas fa-cash-register mr-2 fa-2x"></i>
                            <p> Nueva Venta</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="lista_ventas.php">
                            <i class="fas fa-cart-plus mr-2 fa-2x"></i>
                            <p> Historial Ventas</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
 <!-- select2 -->
 <link rel="stylesheet" href="../css/select2.css">
<!-- Font Awesome -->
  <link rel="stylesheet" href="../css/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="../css/sweetalert2.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../view/adm_catalogo.php" class="nav-link"><!-- info sea necesaria --></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><!-- info sea necesaria --></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a href="../controller/Logout.php">Cerrar sesión</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../view/adm_catalogo.php" class="brand-link">
      <img src="../img/icono_login.png" alt="logo farmacia" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Farmacia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img id="avatar4" src="../img/avatar.png" class="img-circle elevation-2" alt="imagen del usuario">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              <?php
                echo $_SESSION['nombre_us'];
              ?>
          </a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Usuario</li>
          <li class="nav-item">
            <a href="../view/editar_datos_personales.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Datos personales
              </p>
            </a>
          </li> 
          <li class="nav-item">  
            <a href="adm_usuario.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Gestion Usuarios
              </p>
            </a>
          </li>
          
          <li class="nav-header">Almacen</li>
          <li class="nav-item">
            <a href="adm_producto.php" class="nav-link">
              <i class="nav-icon fas fa-pills"></i>
              <p>
                Gestionar Producto
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adm_atributo.php" class="nav-link">
              <i class="nav-icon fas fa-vials"></i>
              <p>
                Gestión atributo
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../js/demo.js"></script>
<!-- sweetalert2 -->
<script src="../js/sweetalert2.js"></script>
<!-- select2 -->
<script src="../js/select2.js"></script>
</body>
</html>
