<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Club Tennis</title>

    <link rel="icon" type="image/x-icon" href="<?php echo constant('URL') ?>public/img/login.jpg" />

    <!-- Custom fonts for this template-->
    <link href="<?php echo constant('URL') ?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo constant('URL') ?>public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                <img src="<?php echo constant('URL') ?>public/img/login.jpg" alt="" width="40" height="40" style="border-radius: 25px">
                </div>
                <div class="sidebar-brand-text mx-3">Club Tennis</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo constant('URL') ?>registroControl/render">
                <i class="fas fa-solid fa-id-card"></i>
                    <span>Registros</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo constant('URL') ?>ausenteControl/render">
                <i class="fas fa-solid fa-user-check"></i>
                    <span>Ingreso</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo constant('URL') ?>presentacionControl/render">
                <i class="fas fa-solid fa-users"></i>
                    <span>Presentacion</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo constant('URL') ?>public/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo constant('URL') ?>loginControl/cerrarSesion">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1 class="h3 mb-0 text-gray-800">Registrar Presentación</h1>
                    <hr>
                    <div class="card shadow align-items-center justify-content-between mb-4">
                        <div class="card-body" style="width: 50%;">
                            <form class="user" id="datosPresentacion">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" id="cedulai" name="cedulai"
                                            placeholder="Cedula invitado" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="codigoi" name="codigoi"
                                            placeholder="Codigo socio" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user" id="fechai" name="fechai"
                                            placeholder="Fecha">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="diasi" name="diasi"
                                            placeholder="Dias">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control form-control-user" id="tipoi" name="tipoi" placeholder="Dias" value="PRESENTACION">
                                <button type="button" onclick="return presentacion()" class="btn btn-primary btn-user btn-block">
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>

                    <h1 class="h3 mb-0 text-gray-800">Restaurante</h1>
                    <hr>
                    <div class="card shadow align-items-center justify-content-between mb-4">
                        <div class="card-body" style="width: 50%;">
                            <form class="user" id="datosAlimento">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="cedulab" name="cedulab"
                                            placeholder="Cedula invitado">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" id="codigob" name="codigob"
                                            placeholder="Codigo socio">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="fechab" name="fechab"
                                        placeholder="Fecha">
                                </div>
                                <input type="hidden" class="form-control form-control-user" id="tipob" name="tipob" placeholder="Dias" value="ALIMENTO">
                                <button type="button" onclick="return alimento()" class="btn btn-primary btn-user btn-block">
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- AQUI TODO EL CONTENIDO DEL INICIO -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Corporacion Recreativa Tennis Golf Club 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo constant('URL') ?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo constant('URL') ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo constant('URL') ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo constant('URL') ?>public/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo constant('URL') ?>public/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo constant('URL') ?>public/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo constant('URL') ?>public/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo constant('URL') ?>public/js/config.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>