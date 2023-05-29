<?php
$ablakcim = array(
	'cim' => 'Játékgyűjtemény',
);

$fejlec = array(
	'cim' => 'Játékgyűjtemény',
);

$lablec = array(
	'copyright' => 'Copyright ' . date("Y") . '.',
	'oldal' => 'Játékgyűjtemény'
);

$dbname='jatek';
$dbjelszo='Webprog1';

$oldalak = array(	
	'/' => array('fajl' => 'kezdooldal', 'szoveg' => 'Főoldal', 'menun' => array(1, 1)),
	'jatekokrol' => array('fajl' => 'jatekokrol', 'szoveg' => 'Játékokról', 'menun' => array(1, 1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1, 1)),
    'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőség', 'menun' => array(1, 1)),
    'uzenetkuldo' => array('fajl' => 'uzenetkuldo', 'szoveg' => 'Üzenetküldő', 'menun' => array(1, 1)),
	'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés/Regisztráció', 'menun' => array(1, 0)),
	'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0, 1)),
	'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0, 0)),	
	'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0, 0)),
	'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(0, 1)),
	'uzenet' => array('fajl' => 'uzenet', 'szoveg' => '', 'menun' => array(0, 0))
);

$hiba_oldal = array('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA = 'images/';
$TIPUSOK = array('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
?>
