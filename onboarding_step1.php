<!DOCTYPE html>
<html lang="en">

<!-- Onboarding Step 1 - Add contant to Hubspot CRM -->


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
                        <h2 class="h3 mb-0 text-gray-800">Onboarding - Paso 1: Alta contacto en CRM Hubspot</h2>
                    </div>
                     </div>
                     
                     
                        <div class="col-lg-6">

                        
                        <p>En el campo Url del sitio web, agregar todos los sitios a los que el contacto representa en éste 
                        <a href="https://docs.google.com/spreadsheets/d/1IdW8bhcJ4hE1GvrI06T4nsIuZbYkRc_OQGJ-wLW_mCg/edit#gid=405796920" target="_blank">sheet</p>
                        
                        <br>

                        <!------------------ Start Hubspot Contact Form ---------------------->



                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                        <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "21496145",
                            formId: "dca4c106-db0f-41e0-81f1-a9d8374377f0"
                        });
                        </script>



                        <!------------------ End Hubspot Contact Form ---------------------->


                        <br><br>
                        
                            <!-- Create new contact-->
                            <a href="https://dashboard.mediosfederales.com/desk/onboarding_step1.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Crear otro contacto</span>
                            </a>
                            
                            <!-- Go to Onboarding - Step 2 -->
                            <a href="https://dashboard.mediosfederales.com/desk/onboarding_step2.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Continuar con Onboarding - Paso 2</span>
                            </a>
                           
                            
                        <br><br><br><br><br><br><br><br>
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