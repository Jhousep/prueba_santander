<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url() ?>favicon.ico">
    <title><?= session()->mainPage ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?=base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTable -->
    <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?=base_url() ?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url() ?>public/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?=base_url() ?>public/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url() ?>public/dist/css/adminlte.css">


</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?=base_url() ?>public/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
             width="120">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand" style="background: #3c3c3d;">
            <!-- Left navbar links -->
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars text-white"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- perfil de usuario-->
                <li class="nav-item user user-menu mt-2 mr-3 ">
                <img src="<?=base_url() ?>public/dist/img/myUser.jpg" class="user-image" alt="User Image">
                 
                </li>
                <!-- full screen -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt text-white"></i>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info elevation-4">

            <!-- Logo -->
            <div class="brand-link bg-primary">
                <img src="<?=base_url() ?>public/dist/img/AdminLTELogo.png" alt=""
                    class="brand-image elevation-2 p-1 px-2 bg-white">
                <span class="brand-text font-weight-lighth" style="cursor: default;"><b>Comerz. Santander</b></span>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <div class="form-inline mt-3">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar py-4" type="search" placeholder="Buscar..."
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">INICIO</li>
                        <li class="nav-item">
                            <a href="<?=base_url('Dashboard') ?>"
                                class="nav-link <?=(session()->mainPage === 'Dashboard') ? 'active' : 'inactive';?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-header">USUARIOS</li>
                        <li class="nav-item">
                            <a href="<?=base_url('Clientes') ?>"
                                class="nav-link <?=(session()->mainPage === 'Clientes') ? 'active' : 'inactive';?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Lista de clientes</p>
                            </a>
                        </li>

                        <li class="nav-header">PRODUCTOS</li>
                        <li class="nav-item">
                            <a href="<?=base_url('Productos') ?>"
                                class="nav-link <?=(session()->mainPage === 'Productos') ? 'active' : 'inactive';?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Lista de productos</p>
                            </a>
                        </li>

                        <li class="nav-header">Ventas</li>
                        <li class="nav-item">
                            <a href="<?=base_url('Ventas') ?>"
                                class="nav-link <?=(session()->mainPage === 'Ventas') ? 'active' : 'inactive';?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Lista de Ventas</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper p-5">
            <?= $this->renderSection('content'); ?>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="row">
                <div class="col-6">
                    <strong>Copyright &copy; 2024 <b class="text-primary">
                    - Todos los derechos reservados.</b>  </strong>
                </div>

                <div class="col-6">
                    <div class="float-right d-sm-inline-block">
                        <span class="mr-3"><b>Correo de soporte:</b> josephstiven0626@gmail.com</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?=base_url() ?>public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?=base_url() ?>public/dist/js/adminlte.js"></script>

    <!-- Select2 -->
    <script src="<?=base_url() ?>public/plugins/select2/js/select2.full.min.js"></script>

    <!-- Toastr -->
    <script src="<?=base_url() ?>public/plugins/toastr/toastr.min.js"></script>

    <!-- Scripts del datatable -->
    <script src="<?=base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Aquí se renderizan los scripts, según el view accedido-->
    <?= $this->renderSection('script'); ?>
</body>

</html>