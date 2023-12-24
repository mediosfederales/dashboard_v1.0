<!-- Start Access restriction -->

<?php
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: /index.php' ) );
    }
?>

<!-- End Access restriction -->


<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <img width="80%" src="/desk/img/logo-mf.png">
                <div class="sidebar-brand-text mx-3"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">




            <!-- Nav Item - Reportes -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Informes</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="index.php">Ingresos diarios</a>
                        <a class="collapse-item" href="historico.php">Ingresos hist&oacute;ricos</a>
                        <a class="collapse-item" href="comparison.php">Ingresos x medio</a>
                        <a class="collapse-item" href="analytics-sites.php">Google Analytics</a>
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">
            
            
            <!-- Nav Item - Reportes -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true">
                    <i class="fas fa-fw fa-plug"></i>
                    <span>Optimizaci&oacute;n</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="score.php">Score</a>
                        <a class="collapse-item" href="missing-sources.php">Fuentes faltantes</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <!--<hr class="sidebar-divider">-->

            
            <!-- Nav Item - Facturaci贸n -->
            <!--<li class="nav-item">
                <a class="nav-link" href="billing.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Facturaci&oacute;n</span></a>
            </li>-->
            
            
            
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Vista medio -->
            <li class="nav-item">
                <a class="nav-link" href="view-publisher.php">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Vista publisher</span></a>
            </li>
            
            
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- Heading -->
            <!--<div class="sidebar-heading">
                Soporte
            </div>-->


            <!-- Nav Item - Soporte -->
            <li class="nav-item">
                <a class="nav-link" href="https://soporte.mediosfederales.com/abrir-ticket" target="_blank">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Soporte</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Nav Item - Salir -->
            <li class="nav-item">
                <a class="nav-link" onclick="logoutAndRedirect();">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Salir</span></a>
            </li>
            
        </ul>
        <!-- End of Sidebar -->


    </div>
    <!-- End of Page Wrapper -->
    
    
    
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
    <!-- Logout function -->
    <script src="js/logout.js"></script>

</body>

</html>