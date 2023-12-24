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

        
// mfid: id Medios Federales
        
switch ($username) {
            
// for default and empty users:
default:                    $mfid = '-';break;
case '':                    $mfid = 0; break;

// for custom users:
case 'lconticello':         $mfid = 1;   break;
case 'lkalmus':             $mfid = 2;   break;
case 'riglesias':           $mfid = 3;   break;
case 'jfilippini':          $mfid = 4;   break;
case 'sgaido':              $mfid = 5;   break;
case 'pjubete':             $mfid = 6;   break;
case 'marinellinicolas':    $mfid = 7;   break;
case 'ramiro':              $mfid = 8;   break;
case 'michel':              $mfid = 9;   break;
case 'nataliar':            $mfid = 10;   break;
case 'diariolamanana':      $mfid = 11;   break;
case '0221':                $mfid = 12;   break;
case 'eleco':               $mfid = 13;   break;
case 'zonales':             $mfid = 14;   break;
case 'nexonorte':           $mfid = 15;   break;
case 'sprotagonistas':      $mfid = 16;   break;
case 'laopinionpergamino':  $mfid = 17;   break;
case 'xeneize':             $mfid = 18;   break;
case 'cronicapy':           $mfid = 19;   break;
case 'ricardoc':            $mfid = 20;   break;
case 'diariocronica':       $mfid = 21;   break;
case 'noticiaslasflores':   $mfid = 22;   break;
case 'berissociudad':       $mfid = 23;   break;
case 'elmensajero':         $mfid = 24;   break;
case 'eldigitalneuquen':                  $mfid = 25; break;
case 'lapoliticaonline':                  $mfid = 26; break;
case 'lanoticia1':                  $mfid = 27; break;
case 'estusalud':           $mfid = 28;   break;
case 'dps':                 $mfid = 29;   break;

case 'pilaradiario': $mfid = 30; break;
case 'radiopopularsanluis': $mfid = 31; break;
case 'lu17': $mfid = 32; break;
case 'utens': $mfid = 33; break;
case 'canal26': $mfid = 34; break;
case 'laopinionar': $mfid = 35; break;
}

        
?>