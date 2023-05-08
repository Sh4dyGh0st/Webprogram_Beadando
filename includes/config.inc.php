<?php
$ablakcim = array(
    'cim' => 'My Truck  Trucker Kft.',
);

$fejlec = array(
    'kepforras' => 'logo.jpg',
    'kepalt' => 'logo',
	'cim' => 'My Truck  Trucker Kft.',
	'motto' => 'Magyarország legjobb nyomkövetési szolgáltatása!'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'My Truck  Trucker Kft.' ,
    'kepforras' => 'bg2.jpg',
    'kepalt' => 'bg2',
   
);

$oldalak = array(
	'/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
    'kepfeltoltes' => array('fajl' => 'kepfeltoltes', 'szoveg' => 'Képfeltöltés', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'email' => array('fajl' => 'email', 'szoveg' => 'E-mail adatok', 'menun' => array(1,1)),
);

$MAPPA = './kepek/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;
?>