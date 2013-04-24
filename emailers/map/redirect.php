<?php

include '../Mobile_Detect.php';
$detect = new Mobile_Detect();

$regexCoordinates = '/\d+,\d+$/';

$queryString = $_SERVER['QUERY_STRING'];

preg_match($regexCoordinates, $queryString, $coordinates);
$coordinates = array_map(function($a){ return intval($a); }, explode(',', $coordinates[0]));

$threshholds = array(
    'x1' => 235,
    'x2' => 383,
    'y1' => 493,
    'y2' => 568
);

if($coordinates[0] >= $threshholds['x1'] && $coordinates[0] <= $threshholds['x2'] && $coordinates[1] >= $threshholds['y1'] && $coordinates[1] <= $threshholds['y2']){
    header("Location: http://google.com");
    exit();
} else {
    header("Location: http://hebsdigital.com");
    exit();
}

if ($detect->isMobile()) {
    // Any mobile device.
	header('Location: mobile.map?' . $_SERVER['QUERY_STRING']);    
/*
    header("content-type: image/jpeg");
    readfile('mobile.jpg');    
*/
}else{
	header('Location: desktop.map?' . $_SERVER['QUERY_STRING']);    

/*
	
	header("content-type: image/jpeg");
    readfile('regular.jpg');  
*/
	
}

?>
