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
                   <br><br>
<!-- Onboarding form top submenu -->
                       <div class="submenu">
                            <?php include 'onboarding_submenu.php';?> 
                       </div>


                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                          $domain = $_POST['domain'];
                          $username = $_POST['username'];
                          $password = $_POST['password'];
                        
                          // Generate the password hash
                          $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                        
                          // Path to the .htpasswd file
                          $htpasswdFilePath = '/home/eua0eye5a2mn/public_html/dashboard.mediosfederales.com/desk/auth/.htpasswd';
                        
                        
                          // Check if the user already exists in the .htpasswd file
                          $userExists = false;
                          $htpasswdContent = file_get_contents($htpasswdFilePath);
                          $users = explode(PHP_EOL, $htpasswdContent);
                          foreach ($users as $user) {
                            $existingUsername = explode(':', $user)[0];
                            if ($existingUsername === $username) {
                              $userExists = true;
                              break;
                            }
                          }
  
  
  
                          // Add the new user to the .htpasswd file if they don't already exist
                          if (!$userExists) {
                            $htpasswdFile = fopen($htpasswdFilePath, 'a');
                            fwrite($htpasswdFile, $username . ':' . $hashedPassword . PHP_EOL);
                            fclose($htpasswdFile);
                        
                          // Confirm user and Print the submitted username and password
                             echo "<br>";
                             echo "Usuario agregado:" . $username . "<br>";
                             echo "Dominio: " . $domain . "<br>";
                             echo "Username: " . $username . "<br>";
                             echo "Password: " . $password;
                            } else {
                                echo "Usuario ya existente.";
                            }
  
 
                        } 
                        
                        
                        
                    
                        // Get the form data. Process Hash
                        
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $new_case_name = $_POST['username'];
                            $new_hashed_value = $_POST['hashed_value'];
                        
                            // Validate the data (you can add more validation if needed)
                        
                            // Read the original site_hashed.php file
                            $case_content = file_get_contents('permissions/site_hashed.php');
                        
                            // Generate the new case statement
                            $new_case_statement = "case '$new_case_name':\n    \$site_hashed = '$new_hashed_value'; break;\n";
                            
                            
                            
        
                            // Check if the case already exists
                            if (strpos($case_content, "case '$new_case_name':") === false) {
                                
                                // If the case does not exist, add the new case statement before the last curly brace (})
                                $last_brace_pos = strrpos($case_content, '}');
                                if ($last_brace_pos !== false) {
                                    $case_content = substr_replace($case_content, $new_case_statement, $last_brace_pos, 0);
                                    file_put_contents('permissions/site_hashed.php', $case_content);
                        
                                    echo "<br>";
                                    echo "New hash value added successfully: " . $new_hashed_value . " (for user: " . $new_case_name . ")" . "<br>";
                                } else {
                                    echo "<br>";
                                    echo "Error: Unable to find the closing curly brace.";
                                }
                            } else {
                                echo "<br>";
                                echo "Case already exists.";
                            }
                        } else {
                            echo "<br>";
                            echo "Invalid request.";
                        }
                        
                        
                        
                        
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_case_name = $_POST['username'];
    $new_mfid_value = $_POST['mfid_value'];
    
    // Validate the data (you can add more validation if needed)
    
    // Read the original mfid.php file
    $mfid_content = file_get_contents('permissions/mfid.php');
    
    // Find the last mfid value in the switch statement
    preg_match_all('/case \'[a-zA-Z0-9]+\'\s*:\s*\$mfid\s*=\s*(\d+);/i', $mfid_content, $matches);
    $last_mfid_value = max($matches[1]);
    $new_mfid_value = $last_mfid_value + 1;
    
    // Generate the new case statement
    $new_mfid_case_statement = "case '$new_case_name': \$mfid = $new_mfid_value; break;\n";
    
    // Check if the case already exists
    if (strpos($mfid_content, "case '$new_case_name':") === false) {
        // If the case does not exist, add the new case statement before the last curly brace (})
        $last_brace_pos = strrpos($mfid_content, '}');
        if ($last_brace_pos !== false) {
            $mfid_content = substr_replace($mfid_content, $new_mfid_case_statement, $last_brace_pos, 0);
            file_put_contents('permissions/mfid.php', $mfid_content);
            $accesseslink = "https://docs.google.com/spreadsheets/d/1IdW8bhcJ4hE1GvrI06T4nsIuZbYkRc_OQGJ-wLW_mCg/edit#gid=0";
            
            echo "<br>";
            echo "New userid added successfully: " . $new_mfid_value;
            echo " <a href='$accesseslink' target='_blank'>(Agregar userid a Sheet Accesos)</a>";
        } else {
            echo "<br>";
            echo "Error: Unable to find the closing curly brace.";
        }
    } else {
        echo "<br>";
        echo "mfid already exists.";
    }
} else {
    echo "<br>";
    echo "Invalid request.";
}


                        
                        
                        
                        
                        
                        // START IMPLEMENTATION ASSISTANT LINKS CREATED AUTOMATICALLY FROM FRONT END FORM. The code below process the links added to the form onboarding.php
                        
                        
                        
                        // Get the form data
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $new_case_name2 = $_POST['username'];
                            $group = $_POST['group'];
                            
                            // Check and assign default value to $asist_url, if nothing is added, it leads the user to https://soporte.mediosfederales.com/implementacion
    $asist_url = !empty($_POST['asist_url']) ? $_POST['asist_url'] : 'https://soporte.mediosfederales.com/implementacion/';
    
                            $asist_url2 = $_POST['asist_url2'];
                            $asist_url3 = $_POST['asist_url3'];
                            $asist_url4 = $_POST['asist_url4'];
                            $asist_url5 = $_POST['asist_url5'];
                            $asist_url6 = $_POST['asist_url6'];
                            $asist_url7 = $_POST['asist_url7'];
                            $asist_url8 = $_POST['asist_url8'];
                            $asist_url9 = $_POST['asist_url9'];
                            $asist_url10 = $_POST['asist_url10'];
                        
    
                            // Validate the data (you can add more validation if needed)
                        
                            // Read the original .php file
                            $case_content2 = file_get_contents('permissions/asistente-implementacion-permissions.php');
                        
                            
                           // Generate the assistant url
                            $new_assist_url = "case '$new_case_name2':\n";
                            $variables = [
                                'group' => $group,
                                'link' => $asist_url,
                                'link2' => $asist_url2,
                                'link3' => $asist_url3,
                                'link4' => $asist_url4,
                                'link5' => $asist_url5,
                                'link6' => $asist_url6,
                                'link7' => $asist_url7,
                                'link8' => $asist_url8,
                                'link9' => $asist_url9,
                                'link10' => $asist_url10,
                            ];
                            
                            foreach ($variables as $varName => $varValue) {
                                if (!empty($varValue)) {
                                    $new_assist_url .= "    \$$varName = '$varValue'; \n";
                                }
                            }
                            
                            $new_assist_url .= "break;\n";
                            




                            // Check if the case already exists
                            if (strpos($case_content2, "case '$new_case_name2':") === false) {
                                // If the case does not exist, add the new case statement before the last curly brace (})
                                $last_brace_pos2 = strrpos($case_content2, '}');
                                if ($last_brace_pos2 !== false) {
                                    $case_content2 = substr_replace($case_content2, $new_assist_url, $last_brace_pos2, 0);
                                    file_put_contents('permissions/asistente-implementacion-permissions.php', $case_content2);
                        
                                    echo "<br>";
                                    echo "New Assistant added successfully.";
                                } else {
                                    echo "<br>";
                                    echo "Error: Unable to find the closing curly brace.";
                                }
                            } else {
                                echo "<br>";
                                echo "Assistant already exists.";
                            }
                        } else {
                            echo "<br>";
                            echo "Invalid request.";
                        }


                        // END IMPLEMENTATION ASSISTANT LINKS CREATED AUTOMATICALLY FROM FRONT END FORM
 
 
 
 
 
 
 
 
 
 
 
                        ?>
                        
                        
                        
                        
                        
                    <br><br>
                    <!-- Go to Onboarding - Step 3 -->
                    <a href="https://dashboard.mediosfederales.com/desk/onboarding_step4.php" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Continuar con Onboarding - Paso 4 (sellers.json)</span>
                    </a>
                            
                        
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






