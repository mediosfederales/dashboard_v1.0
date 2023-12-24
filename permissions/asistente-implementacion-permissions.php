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

// cases of assistants

switch ($username) {
// for default and empty users:
default:
    $group = 1;
    $link = 'https://soporte.mediosfederales.com/implementacion/';
break;


// for custom users:
case 'zonales':      
    $group = 3;
    $link = 'https://implementacion.mediosfederales.com/zonales.com_20062023/';
    $link2 = 'https://implementacion.mediosfederales.com/gestionsindical.com_090522';
    $link3 = 'https://implementacion.mediosfederales.com/masaireweb.com_110522';
    break;
case 'lvp':          
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/lavozdelpueblo.com.ar_110422';
    break;
case 'lt7':          
    $group = 2;
    $link = 'https://implementacion.mediosfederales.com/lt7noticias.com_260422';
    $link2 = 'https://implementacion.mediosfederales.com/gestionsindical.com_090522';
    break;
case 'laopinionpergamino':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/laopinionpergamino.com.ar_030422';
    break;
case '0221':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/0221.com.ar_250322';
    break;
case 'eleco':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/eleco.com.ar_060422';
case 'nexonorte':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/nexonorte.com.ar_110323';
case 'sprotagonistas':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/sprotagonistas.com_250922';
case 'xeneize':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/diarioxeneize.com_290323/';
case 'cronicapy': 
    $group = 3;
    $link = 'https://implementacion.mediosfederales.com/cronica.com.py_210123';
    $link2 = 'https://implementacion.mediosfederales.com/popular.com.py_012323';
    $link3 = 'https://implementacion.mediosfederales.com/hoy.com.py_180223';
    break;
case 'ricardoc':
    $group = 2;
    $link = 'https://implementacion.mediosfederales.com/cuadrocomparativo.org_03042023';
    $link2 = 'https://implementacion.mediosfederales.com/paraninos.org_03042023';
    break;
case 'diariocronica':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/diariocronica.com.ar_240922';
    break;
case 'noticiaslasflores':
    $group = 1;
    $link = 'http://implementacion.mediosfederales.com/noticiaslasflores.com.ar_070623';
    break;
case 'berissociudad':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/berissociudad.com.ar_16052023';
    break;
case 'elmensajero':
    $group = 1;
    $link = 'https://implementacion.mediosfederales.com/diarioelmensajero.com.ar_10112022';
    break;
case 'elecos':
    $group = '1'; 
    $link = 'https://asistente-de-implementacion.onrender.com/m/elecos.com.ar'; 
break;
case 'lapoliticaonline':
    $group = '1'; 
    $link = 'https://implementacion.mediosfederales.com/lapoliticaonline.com.ar_080823'; 
break;
case 'eldigitalneuquen':
    $group = '1'; 
    $link = 'https://implementacion.mediosfederales.com/eldigitalneuquen.com.ar_170823'; 
break;
case 'lanoticia1':
    $group = '1'; 
    $link = 'http://implementacion.mediosfederales.com/lanoticia1.com_29062023/'; 
break;
case 'pilaradiario':
    $group = '1'; 
    $link = 'https://implementacion.mediosfederales.com/pilaradiario.com_310823'; 
break;

case 'radiopopularsanluis':
    $group = '1'; 
    $link = 'https://asistente-de-implementacion.onrender.com/g/radiopopularsanluis.com.ar119/'; 
break;
case 'lu17':
    $group = '1'; 
    $link = 'https://asistente-de-implementacion.onrender.com/g/lu17.com120/'; 
break;
case 'canal26':
    $group = '1'; 
    $link = 'https://sites.google.com/mediosfederales.com/canal26com'; 
break;
case 'laopinionar':
    $group = '1'; 
    $link = 'https://implementacion.mediosfederales.com/laopinion.com.ar_280723/'; 
break;
}
?>