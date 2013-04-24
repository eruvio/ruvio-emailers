<?php

include '../Mobile_Detect.php';
$detect = new Mobile_Detect();

die(var_dump($_SERVER['QUERY_STRING']));


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
