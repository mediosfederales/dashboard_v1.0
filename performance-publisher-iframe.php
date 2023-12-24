<style>
    body {
        margin:0;
        padding:0;
    }
</style>



<?php
            
    $l_ifr = '<iframe width="100%" height="3200px" src="https://datastudio.google.com/embed/reporting/4145183d-f98b-4e46-b9b4-8d5d9a44bb4e/page/p_k5s92pgcwc?params=%7B%22df116%22:%22include%25EE%2580%25800%25EE%2580%2580PT%25EE%2580%2580';
                        
    $r_ifr = '%22%7D" frameborder="0" style="border:0" allowfullscreen></iframe>';
                        
                        
    require 'permissions/site_hashed.php'; // to return hash (variable)
                        
    echo $l_ifr . $site_hashed . $r_ifr; 
                                 
                                
?>