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

                </div>   
                    
                    
                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>








                    <div class="row">

                        <!-- Card -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-b font-weight-bold text-primary text-uppercase mb-1">
                                                Adserver</div>
                                            <div class="">Gestiona mejor tus campañas de publicidad con el mejor Adserver del mercado</div>
                                            



                                        <!-- Link that triggers the modal -->
                                        <a href="#" id="openModalLink">Más información</a>
                                        
                                        <!-- Modal container -->
                                        <div class="popup-container" id="myModal">
                                            <div class="popup-content">
                                                <span id="closeModalBtn">&times;</span> <!-- Close button -->
                                                <h2>Adserver</h2>
                                                <p>Haga click en el siguiente enlace. Lo llevará al login del Adserver.</p>
                                                <!-- Tab Navigation Menu -->
                                                <ul class="tab-menu">
                                                    <li class="tab-link" data-tab="tab1">Tab 1</li>
                                                    <li class="tab-link" data-tab="tab2">Tab 2</li>
                                                    <li class="tab-link" data-tab="tab3">Tab 3</li>
                                                </ul>
                                        
                                                <!-- Tab Content -->
                                                <div class="tab" id="tab1">
                                                    <h2>Tab 1 Content</h2>
                                                    <p>This is the content of Tab 1.</p>
                                                </div>
                                        
                                                <div class="tab" id="tab2">
                                                    <h2>Tab 2 Content</h2>
                                                    <p>This is the content of Tab 2.</p>
                                                </div>
                                        
                                                <div class="tab" id="tab3">
                                                    <h2>Tab 3 Content</h2>
                                                    <p>This is the content of Tab 3.</p>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                       
                       
                        <!-- Card -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-b font-weight-bold text-primary text-uppercase mb-1">
                                                Video Player</div>
                                            <div class="">Gestiona mejor tus campañas de publicidad con el mejor Adserver del mercado</div>
                                            



                                        <!-- Link that triggers the modal -->
                                        <a href="#" id="openModalLink">Más información</a>
                                        
                                        <!-- Modal container -->
                                        <div class="popup-container" id="myModal">
                                            <div class="popup-content">
                                                <span id="closeModalBtn">&times;</span> <!-- Close button -->
                                                <h2>Adserver</h2>
                                                <p>Haga click en el siguiente enlace. Lo llevará al login del Adserver.</p>
                                                <!-- Tab Navigation Menu -->
                                                <ul class="tab-menu">
                                                    <li class="tab-link" data-tab="tab1">Tab 1</li>
                                                    <li class="tab-link" data-tab="tab2">Tab 2</li>
                                                    <li class="tab-link" data-tab="tab3">Tab 3</li>
                                                </ul>
                                        
                                                <!-- Tab Content -->
                                                <div class="tab" id="tab1">
                                                    <h2>Tab 1 Content</h2>
                                                    <p>This is the content of Tab 1.</p>
                                                </div>
                                        
                                                <div class="tab" id="tab2">
                                                    <h2>Tab 2 Content</h2>
                                                    <p>This is the content of Tab 2.</p>
                                                </div>
                                        
                                                <div class="tab" id="tab3">
                                                    <h2>Tab 3 Content</h2>
                                                    <p>This is the content of Tab 3.</p>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- Card -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-b font-weight-bold text-primary text-uppercase mb-1">
                                                Cube Programmatic</div>
                                            <div class="">Gestiona mejor tus campañas de publicidad con el mejor Adserver del mercado</div>
                                            



                                        <!-- Link that triggers the modal -->
                                        <a href="#" id="openModalLink">Más información</a>
                                        
                                        <!-- Modal container -->
                                        <div class="popup-container" id="myModal">
                                            <div class="popup-content">
                                                <span id="closeModalBtn">&times;</span> <!-- Close button -->
                                                <h2>Adserver</h2>
                                                <p>Haga click en el siguiente enlace. Lo llevará al login del Adserver.</p>
                                                <!-- Tab Navigation Menu -->
                                                <ul class="tab-menu">
                                                    <li class="tab-link" data-tab="tab1">Tab 1</li>
                                                    <li class="tab-link" data-tab="tab2">Tab 2</li>
                                                    <li class="tab-link" data-tab="tab3">Tab 3</li>
                                                </ul>
                                        
                                                <!-- Tab Content -->
                                                <div class="tab" id="tab1">
                                                    <h2>Tab 1 Content</h2>
                                                    <p>This is the content of Tab 1.</p>
                                                </div>
                                        
                                                <div class="tab" id="tab2">
                                                    <h2>Tab 2 Content</h2>
                                                    <p>This is the content of Tab 2.</p>
                                                </div>
                                        
                                                <div class="tab" id="tab3">
                                                    <h2>Tab 3 Content</h2>
                                                    <p>This is the content of Tab 3.</p>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
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
  
     <!-- JavaScript to handle the modal -->
    <script src="js/main.js">
    
    </script> 
    
</body>

</html>