<!DOCTYPE html>
<html lang="en">


<!-- Header -->
<?php include 'header.php';?>



<body id="page-top">



<!-- mfid -->
<div class="mfidstyle">
    <span id="mfidget" class="mr-2 d-none d-lg-inline text-gray-500 small">
                                        
        <?php
                                        
        // get mfid
                                        
        include 'permissions/mfid.php';
        echo $mfid;
                                        
        ?>
                                    
    </span>
</div>  




<!-- Google Tag Manager (noscript) -->
<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=GTM-MM34H2S'
height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar Menu 
        (first open menu-permissions.php and add new user) -->
        <div class="menu">
        <?php include 'permissions/menu-permissions.php';?>
        </div>
        <!-- End of Sidebar Menu -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <!-- Begin Content -->
                <div>

                    <!-- Topbar Navbar 
                    (first open topbar-permissions.php and add new user) -->
                    <div class="menu">
                    <?php include 'permissions/topbar-permissions.php';?> 
                    </div>
                    <!-- End of Topbar -->

                   
                    
                    
                    <div class="row">

                        <div class="col-lg-12">

                            <div class="card position-relative">
                                <div class="card-header py-3" style="text-align:center;">
                                    <br>
                                    <h4 class="m-0 font-weight-bold text-primary">Publica tu contenido audiovisual, carga videos sin límites</h4>
                                </div>
                                <div class="card-header py-3" style="text-align:center;">
                                    <img src="img/video-player-1.png" width="45%";>
                                </div>
                                <div class="card-header py-3" style="text-align:center;">
                                    <p class="mb-0" style="color:#000;">Gestiona tu propio <b>Video Player</b>, sube tus videos propios o desde Youtube.<br><b>Storage</b> de video sin l&iacute;mites, <b>banco de videos</b> para enriquecer tu contenido editorial.<br>Conecta el Player al Adserver y saca el mayor provecho de tu inventario de Video.<br>&#161;Cont&aacute;ctate con nosotros!</p>
                                    <br>
                                    <div class="dropdown mb-4">
                                        <a href="https://mediosfederales.com/contacto" target="_blank">
                                            <button class="btn btn-primary" type="button"
                                            id="dropdownMenuButton" aria-haspopup="true"
                                            aria-expanded="false">
                                            Implementar el Player&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </button>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>


                </div>
                <!-- /.container-fluid -->


                <!-- Footer -->
                <div>
                    <?php include 'footer.php';?>
                </div>
                
                
            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

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

</body>

</html>