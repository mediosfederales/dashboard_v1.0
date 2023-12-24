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




// topbar Menu Permissions
        
        switch ($username) {
            // rol Superadmin
            case 'sgaido':      
                include 'topbar/topbar-superadmin.php';
                break;
            
            // rol Admin
            case (  $username == 'lconticello' || 
                    $username == 'lkalmus' || 
                    $username == 'riglesias' || 
                    $username == 'jfilippini' ||       
                    $username == 'pjubete' ):
                    include 'topbar/topbar-superadmin.php';
                break;
            
            // rol Analyst
            case ($username == 'marinellinicolas' || 
                  $username == 'ramiro' || 
                  $username == 'nataliar' ||
                  $username == 'mleal' ||
                  $username == 'michel' ):
                  include 'topbar/topbar-analyst.php'; 
                break;
            
            // rol Network
            case ($username == 'pulzo' || 'estusalud' || 'dps'):
                  include 'topbar/topbar-network.php'; 
                break;
            
            // rol Publisher (default)
            default:  
                include 'topbar/topbar-publisher.php'; 
                
            
        }


        
?>