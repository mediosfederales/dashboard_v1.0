<!-- Start Access restriction -->

<?php
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: /index.php' ) );
    }
?>

<!-- End Access restriction -->




<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include 'header.php';?>

<body id="page-top">



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

                   
                    
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12"> 
                        <!-- Onboarding form top submenu -->
                       <div class="submenu">
                            <?php include 'onboarding_submenu.php';?> 
                       </div>




<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Ensure username is not empty
    if (empty($username)) {
        echo "Username cannot be empty.";
    } else {
        $htpasswdFile = '/home/eua0eye5a2mn/public_html/dashboard.mediosfederales.com/desk/auth/.htpasswd'; // Replace with the actual path to your .htpasswd file

        // Check if the user exists in the .htpasswd file
        $htpasswd = file_get_contents($htpasswdFile);
        $lines = explode("\n", $htpasswd);
        $updatedHtpasswd = '';

        foreach ($lines as $line) {
            $parts = explode(':', $line);
            $existingUsername = trim($parts[0]);
            if ($existingUsername !== $username) {
                $updatedHtpasswd .= $line . "\n";
            }
        }

        // Remove any existing blank lines at the end of the updated .htpasswd file
        $updatedHtpasswd = rtrim($updatedHtpasswd);

        // Add a new blank line at the end of the updated .htpasswd file
        $updatedHtpasswd .= "\n";

        // Write the updated .htpasswd file
        file_put_contents($htpasswdFile, $updatedHtpasswd);

        echo "<br>";
        echo "User '$username' has been deleted from the .htpasswd file.";
    }
}






// ------- DELETE HASH FROM SITE_HASHED.PHP -------- //

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the username entered in the 'hashed_value' input field
    $input_username = $_POST["username"];
    
    // Load the contents of your PHP file
    $php_code = file_get_contents("permissions/site_hashed.php");

    // Search for and delete the case statement for the input username
    $php_code = preg_replace("/case\s+'$input_username':.*?break;/s", '', $php_code);

    // Write the updated PHP code back to your file
    file_put_contents("permissions/site_hashed.php", $php_code);

    echo "<br>";
    echo "Case statement for '$input_username' deleted.";
}



// ------- DELETE ASSISTANT URL -------- //

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the username entered in the 'hashed_value' input field
    $input_username = $_POST["username"];
    
    // Load the contents of your PHP file
    $php_code = file_get_contents("permissions/asistente-implementacion-permissions.php");

    // Search for and delete the case statement for the input username
    $php_code = preg_replace("/case\s+'$input_username':.*?break;/s", '', $php_code);

    // Write the updated PHP code back to your file
    file_put_contents("permissions/asistente-implementacion-permissions.php", $php_code);

    echo "<br>";
    echo "Case statement for '$input_username' deleted.";
}



 
?>
                        
                        
                        
                        
                        
                    <br><br>
                    
                            
                        
</div>
</div>

                </div>
                <!-- /.container-fluid -->


                
            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




</body>

</html>






