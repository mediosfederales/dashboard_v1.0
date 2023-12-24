<!DOCTYPE html>
<html lang="en">

<!-- Onboarding Step 2 -->


<!-- Header -->
<?php include 'header.php';?>

<body id="page-top" style="overflow-y: scroll;">

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
    <div id="wrapper" >

        <!-- Sidebar Menu 
        (first open menu-permissions.php and add new user) -->
        <div class="menu">
        <?php include 'permissions/menu-permissions.php';?>
        </div>
        <!-- End of Sidebar Menu -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column"">

            <!-- Main Content -->
            <div id="content" >

                
            <!-- Begin Content -->
            <div>

                <!-- Topbar Navbar 
                (first open topbar-permissions.php and add new user) -->
                <div class="menu">
                <?php include 'permissions/topbar-permissions.php';?> 
                </div>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12"> 
                        
                        <br><br>
                        
                        <!-- Onboarding form top submenu -->
                       <div class="submenu">
                            <?php include 'onboarding_submenu.php';?> 
                       </div>
                        
                        
                            <br><br>
                            <!-- Title and description -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h2 class="h3 mb-0 text-gray-800">Onboarding - Paso 2:  Asistente de Implementación</h2>
                            </div>
                        </div>
                
                
                        <div class="col-lg-12">

                        <br><br>
                        <p>1. Acceder al Adserver (Equativ) para crear Grupo de usuario, usuario y acceso, siteid, pageid:</p>
                        
                            <!-- Go to Adserver -->
                            <a href="https://manage.smartadserver.com/" class="btn btn-secondary btn-icon-split" target="_blank">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Ir al adserver</span>
                            </a>
                              
                        </div>
                        
                        <div class="col-lg-12">

                        <br><br>
                        <p>2. Acceder a Tag Manager para crear Contenedor (Id):</p>
                        
                            <!-- Go to GTM -->
                            <a href="https://tagmanager.google.com/" class="btn btn-secondary btn-icon-split" target="_blank">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Ir al Google Tag Manager</span>
                            </a>
                              
                        </div>
                        
                        
                        <div class="col-lg-12">

                        <br><br>
                        <p>3. Acceder al siguiente link para configurar el Asistente de Implementación:</p>
                        
                            <!-- Go to Implementation assistant -->
                            <a href="https://asistente-de-implementacion.onrender.com/" class="btn btn-secondary btn-icon-split" target="_blank">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Configurar Asistente de Implementación</span>
                            </a>
                              
                        </div>
                        
                        
                        <div class="col-lg-12">

                        <br><br>
                        <p>4. Una vez configurado el Asistente, continuar con el acceso y configuraciones a la Plataforma MF:</p>
                        
                            <a href="https://dashboard.mediosfederales.com/desk/onboarding_step3.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Continuar con Accesos y Configuración Plataforma MF - Paso 3</span>
                            </a>
                              
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