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
            case ($username == 'lconticello' || $username == 'lkalmus' || $username == 'riglesias' || $username == 'jfilippini' || $username == 'pjubete' || $username == 'sgaido'):       // rol Superadmin
                include 'billing-superadmin.php';
                break;
            default:  // rol Publisher & Network
                include 'billing-publisher.php'; 
        }

        
?>