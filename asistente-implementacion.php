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
                                    <h4 class="m-0 font-weight-bold text-primary">Asistente de Implementación
                                    </h4>
                                </div>
                                <div class="card-header py-3" style="text-align:center;">
                                    <img src="img/asistente-implementacion.png" width="45%";>
                                </div>
                                <div class="card-header py-3" style="text-align:center;">
                                    <p class="mb-0" style="color:#000;">Haga click a continuación para acceder a los <b>códigos del Adserver</b> y a su <b>Mediakit</b>.<br>Ingrese con el mismo Usuario y Contraseña que utilizó para acceder a esta plataforma.</b></p>
                                    <br>
                                    <div class="dropdown mb-4">
                                        
                                        
                                        <!-- START IMPLEMENTATION ASSISTANTS LINKS - this code writes as many buttons as assistant created. It's divide in groups, up to 10. It needs improvements  -->
                                        
                                        
                                        
                                    
                                        <?php require 'permissions/asistente-implementacion-permissions.php'; // to return assistants urls ?>
                                        
                                        
                                        
                                        <?php
                                        
                                        $substring = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link);
                                        $substring2 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link2);
                                        $substring3 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link3);
                                        $substring4 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link4);
                                        $substring5 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link5);
                                        $substring6 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link6);
                                        $substring7 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link7);
                                        $substring8 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link8);
                                        $substring9 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link9);
                                        $substring10 = preg_replace('/(.*).com(.*).com(.*)/sm', '\2', $link10);
                                        
                                       
                                        switch ($group) {  
                                        
                                        
                                        // for single sites:
                                            default:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    Ir al Asistente de Implementación&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                            break;
                                            
                                            
                                            
                                            
                                            
                                        // for group of 2 sites:
                                            case 2:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                            break;
                                            
                                            
                                            
                                            
                                            
                                            
                                        // for group of 3 sites:   
                                            case 3:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                            break;
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        // for group of 4 sites:   
                                            case 4:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link4' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring4&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                        break;
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        // for group of 5 sites:   
                                            case 5:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link4' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring4&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link5' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring5&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                        break;
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        // for group of 6 sites:   
                                            case 6:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link4' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring4&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link5' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring5&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link6' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring6&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                        break;
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        // for group of 7 sites:   
                                            case 7:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link4' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring4&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link5' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring5&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link6' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring6&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link7' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring7&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                        break;
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                                
                                                
                                        // for group of 8 sites:   
                                            case 8:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link4' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring4&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link5' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring5&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link6' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring6&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link7' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring7&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <a href='$link8' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring8&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                        break;
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        // for group of 9 sites:   
                                            case 9:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link4' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring4&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link5' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring5&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link6' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring6&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link7' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring7&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <a href='$link8' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring8&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                
                                                echo "
                                                <br><br>
                                                <a href='$link9' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring9&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                        break;
                                        
                                        
                                        
                                                
                                                
                                                
                                                
                                                
                                                
                                        // for group of 10 sites:   
                                            case 10:
                                                echo "
                                                <a href='$link' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link2' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring2&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <br>
                                                <a href='$link3' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring3&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                echo "
                                                <a href='$link4' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring4&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br>
                                                <a href='$link5' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring5&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <a href='$link6' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring6&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <br>
                                                <a href='$link7' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring7&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <a href='$link8' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring8&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                
                                                echo "
                                                <br>
                                                <a href='$link9' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring9&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                                echo "
                                                <a href='$link10' target='_blank'>
                                                    <button class='btn btn-primary' type='button'
                                                    id='dropdownMenuButton' aria-haspopup='true'
                                                    aria-expanded='false'>
                                                    $substring10&nbsp;&nbsp;&nbsp;<i class='fa fa-arrow-right' aria-hidden='true'></i>
                                                </button>
                                                </a>";
                                                
                                                
                                        break;

                                        }
                                        
                                        
                                        
                                        ?>
                                        
                                        
                                        <!-- END IMPLEMENTATION ASSISTANTS LINKS - this code writes as many buttons as assistant created. It's divide in groups, up to 10. It needs improvements  -->
                                        
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

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Medios Federales</span>
                    </div>
                </div>
            </footer>-->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

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

</body>

</html>