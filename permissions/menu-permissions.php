<!-- Start Access restriction -->

<?php
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: /index.php' ) );
    }
?>

<!-- End Access restriction -->


<?php 
 
// get credentials from htpasswd

$username = $_SERVER['PHP_AUTH_USER'];

        
// sidebar Menu Permissions
        
        switch ($username) {
            // rol Superadmin
            case 'sgaido':      
                include 'menu/menu-superadmin.php';
                break;
           
            // rol Admin
            case (  $username == 'lconticello' || 
                    $username == 'lkalmus' || 
                    $username == 'riglesias' || 
                    $username == 'jfilippini' || 
                    $username == 'pjubete'):       
                    include 'menu/menu-admin.php';
                break;
            
            // rol Analyst
            case ($username == 'marinellinicolas' || 
                  $username == 'ramiro' || 
                  $username == 'nataliar' ||
                  $username == 'mleal' ||
                  $username == 'michel' ):
                  include 'menu/menu-analyst.php'; 
                break;
                
            // rol Network
            case ($username == 'pulzo' || 
                  $username =='estusalud' || 
                  $username =='dps'):
                  include 'menu/menu-network.php'; 
                break;
            
            // rol Publisher (default)
            default:  
                include 'menu/menu-publisher.php'; 
                
        }

        
?>