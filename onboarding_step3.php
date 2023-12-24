<!DOCTYPE html>
<html lang="en">

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
                            <h2 class="h3 mb-0 text-gray-800">Onboarding - Paso 3:  Acceso y Configuración - Plataforma MF</h2>
                            </div>
                        </div>
                
                        
                        <!-- ONBOARDING FORM -->
                        <div class="col-lg-12">

                            <!-- add users to auth .htpasswd-->
                            <p>Acceso Dashboard MF:</p>
                            <form id="onboardingForm" method="POST" action="onboarding_step3_process.php">
                              <input type="text" name="domain" placeholder="Dominio"><br>
                              <input type="text" name="username" placeholder="Username"><br>
                              <input type="password" name="password" placeholder="Password"><span><i> También Agregar dominio, usuario y password <a href="https://docs.google.com/spreadsheets/d/1IdW8bhcJ4hE1GvrI06T4nsIuZbYkRc_OQGJ-wLW_mCg/edit#gid=0" target="_blank"> Aquí</a></i></span><br>
                              
                              
                                

                       
                              
                            <!-- relate user with site_hashed, and create mfid and sellers.json -->  
                            <br><br>
                            <p>site_hash:</p>
                                <!--<input type="text" id="case_name" name="case_name" placeholder="Username" required><br>-->
                                <!--<input type="text" id="mfid_value" name="mfid_value" placeholder="mfid" ><span><i> Ver últimos mfids agregados <a href="https://docs.google.com/spreadsheets/d/1IdW8bhcJ4hE1GvrI06T4nsIuZbYkRc_OQGJ-wLW_mCg/edit#gid=1697714191" target="_blank"> Aquí</a></i></span>
                                <br>-->
                                <input type="text" id="hashed_value" name="hashed_value" placeholder="Hash" required><span><i> Para crear hash <a href="https://www.md5hashgenerator.com/" target="_blank">click aqui</a> agregando el nombre del dominio solo (ej: eleco). Copiar SHA1 Hash.</i></span><br>
                                
                            
                            
                            <br><br>
                            
                            
                            
                            
                            <!-- relate user with asistente de implementacion -->  
                            <p>Links a asistentes de implementación:</p>
                                <!--<input type="text" id="case_name2" name="case_name2" placeholder="Username" >
                                <br>-->
                                <input type="text" id="group" name="group" placeholder="group" >
                                <br>
                                <input type="text" id="asist_url" name="asist_url" placeholder="Asistente url 1" >
                                <br>
                                <input type="text" id="asist_url2" name="asist_url2" placeholder="Asistente url 2">
                                <br>
                                <input type="text" id="asist_url3" name="asist_url3" placeholder="Asistente url 3">
                                <br>
                                <input type="text" id="asist_url4" name="asist_url4" placeholder="Asistente url 4">
                                <br>
                                <input type="text" id="asist_url5" name="asist_url5" placeholder="Asistente url 5">
                                <br>
                                <input type="text" id="asist_url6" name="asist_url6" placeholder="Asistente url 6">
                                <br>
                                <input type="text" id="asist_url7" name="asist_url7" placeholder="Asistente url 7">
                                <br>
                                <input type="text" id="asist_url8" name="asist_url8" placeholder="Asistente url 8">
                                <br>
                                <input type="text" id="asist_url9" name="asist_url9" placeholder="Asistente url 9">
                                <br>
                                <input type="text" id="asist_url10" name="asist_url10" placeholder="Asistente url 10" ><span><i> También Agregar links de los asistentes <a href="https://docs.google.com/spreadsheets/d/1IdW8bhcJ4hE1GvrI06T4nsIuZbYkRc_OQGJ-wLW_mCg/edit#gid=0" target="_blank"> Aquí</a></i></span>
                                <br>
                                



                            <br><br>
                            <input type="submit" value="Cargar">


                            
                                 
                            </form>
                                               
                            <br><br>

                        </div>
                        
                        
        
                        
                    </div>


                </div>
                <!-- /.container-fluid -->
                
                    


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