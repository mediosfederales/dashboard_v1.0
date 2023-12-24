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


// array of hashes

switch ($username) {
// for default and empty users:
default:                   
    $site_hashed = 'nn'; break;

// for custom users:
case 'diariolamanana':       // medios
    $site_hashed = 'b5aa6c0e8a0fccba1875a81bc103bed2c84f3cc0'; break;
case 'medios':       // medios
    $site_hashed = '950fc989c0bd8d4838c59bfaaf552fa58cfa21c7'; break;
case 'lvp':          // lavozdelpueblo.com.ar
    $site_hashed = '7fac03fa674cf5582ed89885614c0638b385f077'; break;
case 'zonales':      // zonales.com, masaireweb.com, gestion sindical.com
    $site_hashed = 'c1e0b0984987e10c8d6478d169a32336d34500b7'; break;
case 'laopinionpergamino':  // laopinionpergamino.com.ar
    $site_hashed = '87d9ab75074ee63539dd1b3d959cf9f6981af7f2'; break;
case '0221':  // 0221.com.ar
    $site_hashed = '3c5888626ca6876e25780e9b00396bdf5e4aab6a'; break;
case 'eleco':  // eleco.com.ar
    $site_hashed = '522170b87c6432ac09f93a22af2e07c208ca3767'; break;
case 'pulzo':  // pulzo.com
    $site_hashed = '3d9d769b0ef105142b334e258756326c43532246'; break;
case 'nexonorte':  // nexonorte.com.ar
    $site_hashed = 'ea017ce9257c9ffb8586b159bd752201d73a5864'; break;
case 'estusalud':  // nexonorte.com.ar
    $site_hashed = '86849893f2259c6b5ef25bea57ad63f97506d4e7'; break;
case 'sprotagonistas':  // sprotagonistas.com
    $site_hashed = '852e57df842b6661095fbc5d60c87c8b4662f8de'; break;
case 'dps': // radioagricultura.cl
    $site_hashed = '7f013582cbb7ade167813a74a430bb262f8ffa72'; break;
case 'xeneize': // diarioxeneize.com
    $site_hashed = 'b337369b6d11cdab364b39a3992b6af131587070'; break;
case 'cronicapy': // cronica.com.py, popular.com.py, hoy.com.py, lanacion.com.py ...
    $site_hashed = 'ea25a8faf057ca2951f3b0d685019d9d7f48c8d2'; break;
case 'ricardoc': // cuadrocomparativo.org, paraninos.org ...
    $site_hashed = '55dc2b0ca40c6e0de7f888a9918fa6c72f836d04'; break;
case 'diariocronica': // diariocronica.com.ar ...
    $site_hashed = '4eacb1f21b53074cdf5be6d1994456a61003eb45'; break;
case 'noticiaslasflores': // noticiaslasflores.com.ar
    $site_hashed = 'c17fce6672069ce870b93286a75fbea620cde66a'; break;
case 'berissociudad': // berissociudad.com.ar y otros sitios de este grupo
    $site_hashed = '8f3516d99aa7418b8fa9721aa62be4aff503ecd3'; break;
case 'elmensajero': // diario-elmensajero.com.ar
    $site_hashed = '6e8ca8a649b355b3b872d14fc715272f631ceda7'; break;
case 'elecos':
    $site_hashed = '1cb026335e3e24254fb838bd0d1e7fc1adaa0ca0'; break;
case 'eldigitalneuquen':
    $site_hashed = '7c335b28dcc3f9616b83147165c2db4a7f678fdb'; break;
case 'lapoliticaonline':
    $site_hashed = 'a50a6864ada83a12797b0a09d3d4c3880be9c258'; break;
case 'lanoticia1':
    $site_hashed = 'fd295301cbc148ccfe4ab24a5c1ee4c5074f72b0'; break;
case 'pilaradiario':
    $site_hashed = 'ef9aafc0eaf3263623417e31c56806fcfffbed55'; break;
case 'radiopopularsanluis':
    $site_hashed = 'ddb6716ec7f82c9742de40f388556cc698629118'; break;
case 'lu17':
    $site_hashed = '2b69c4253cd86e9ef3c4def5b26ea18df0a001f2'; break;

case 'canal26':
    $site_hashed = 'dfe5de137080b6340d68c03ce35e5ae7'; break;
case 'laopinionar':
    $site_hashed = 'bb91c09448d6478d556d3a2fe32a5d1b12c465a7'; break;
}
