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

                   
                
                    
                    <div class="row">

                        <!-- ONBOARDING FORM -->
                        <div class="col-lg-12">


                            <br><br>
                        
                        <div class="col-lg-12">

                            
                            
                            
                        <!-- Onboarding form top submenu -->
                       <div class="submenu">
                            <?php include 'onboarding_submenu.php';?> 
                       </div>
                        
                        <br><br>
                        <!-- Title and description -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h2 class="h3 mb-0 text-gray-800">Onboarding - Paso 4:  sellers.json</h2>
                            </div>
                        <br><br>
                        
                         
                       
                            <!-- START sellers.json -->
                            <p>Por el momento no está habilitado ya que el sellers.json se encuentra bajo el dominio mediosfederales.com alojado en otro host (adclic).<br>Requiere cargarlo manualmente.</p>
                            <!--<div class="col-lg-12">
                          
                                <form id="sellersForm">
                                     <input type="text" id="domain" name="domain" placeholder="domain" required><br>
                                     <input type="number" id="is_confidential" name="is_confidential" value="0" required><br>
                                     <input type="text" id="name" name="name" placeholder="name" required><br>
                                     <input type="number" id="seller_id" name="seller_id" placeholder="seller_id" required><br>
                                     <input type="text" id="seller_type" name="seller_type" value="PUBLISHER" required><br>
                                     <br>
                                     <input type="submit" value="Submit">
                                 
                                </form>-->
 



                                <div id="result"></div>
                                 
                                 <script>
                                     document.getElementById("sellersForm").addEventListener("submit", function (event) {
                                         event.preventDefault();
                                         const form = new FormData(event.target);
                                         const formData = Object.fromEntries(form.entries());
 
                                         // Make an AJAX request to the PHP script
                                         const xhr = new XMLHttpRequest();
                                         xhr.onreadystatechange = function () {
                                             if (xhr.readyState === XMLHttpRequest.DONE) {
                                                 if (xhr.status === 200) {
                                                     document.getElementById("result").innerHTML = xhr.responseText;
                                                 } else {
                                                     document.getElementById("result").innerHTML = "Error occurred.";
                                                 }
                                             }
                                         };
                                         xhr.open("POST", "onboarding-sellersjson-process.php", true);
                                         xhr.setRequestHeader("Content-Type", "application/json");
                                         xhr.send(JSON.stringify(formData));
                                     });
                                 </script>
<!-- END sellers.json -->


                    
                            
<br><br>


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