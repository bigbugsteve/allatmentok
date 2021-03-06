<?php
$ablakcim = array(
      'cim' => 'Mini honlap Kft.',
);

$fejlec = array(
      'kepforras' => 'logo.png',
      'kepalt' => 'logo',
      'cim' => 'Mini honlap',
      'motto' => ''
);

$lablec = array(
      'copyright' => 'Copyright ' . date("Y") . '.',
      'ceg' => 'Mini honlap Kft.'
);

$IMAGES = 'assets/images/';
$GALLERY = 'assets/images/gallery/';
$TYPES = array('.jpg', '.png');

$pages = array(
      '/' => array('file' => 'home', 'text' => 'Főoldal', 'menun' => array(1, 1)),
      'about' => array('file' => 'about', 'text' => 'Rólunk', 'menun' => array(1, 1)),
      'contact' => array('file' => 'contact', 'text' => 'Kapcsolat', 'menun' => array(1, 1)),
      'messageSent' => array('file' => 'messageSent', 'text' => '', 'menun' => array(0, 0)),
      'contact_all' => array('file' => 'contact_all', 'text' => 'Üzenetek', 'menun' => array(1, 1)),
      'gallery' => array('file' => 'gallery', 'text' => 'Galéria', 'menun' => array(1, 1)),
      'upload' => array('file' => 'upload', 'text' => 'Feltöltés', 'menun' => array(0, 1)),
      'login' => array('file' => 'login', 'text' => 'Belépés', 'menun' => array(1, 0)),
      'loggedIn' => array('file' => 'loggedIn', 'text' => '', 'menun' => array(1, 0)),
      'logout' => array('file' => 'logout', 'text' => 'Kilépés', 'menun' => array(0, 1)),
      'registration' => array('file' => 'registration', 'text' => 'Regisztráció', 'menun' => array(0, 0)),
      'regSuccess' => array('file' => 'regSuccess', 'text' => '', 'menun' => array(0, 0)),
);

$not_found_page = array('file' => '404', 'text' => 'A keresett oldal nem található!');
