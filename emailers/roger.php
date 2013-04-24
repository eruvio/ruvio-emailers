<?php

include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    // Any mobile device.
    
    header("content-type: image/jpeg");
    readfile('mobile1.jpg');    
}else{
	
	header("content-type: image/jpeg");
    readfile('desktop1.jpg');  
	
}

?>




<?php

/*


<div style="text-align:center; width:400px; margin-left:auto; margin-right:auto;">
<img id="Image-Maps_7201303142146545" src="http://www.designbyroger.com/Email-testing/regular.jpg" usemap="#Image-Maps_7201303142146545" border="0" width="400" height="600" alt="" />

<map id="_Image-Maps_7201303142146545" name="Image-Maps_7201303142146545">


<area shape="rect" coords="19,47,93,128" href="http://www.hebsdigital.com" alt="" title=""    />

<area shape="rect" coords="20,141,89,213" href="http://www.hebsdigital.com/aboutus.php" alt="" title=""    />

<area shape="rect" coords="21,230,90,302" href="http://www.hebsdigital.com/contact.php" alt="" title=""    />

</map>

</div>


$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_]%", '', $_SERVER['QUERY_STRING']); 

//saves ip address and timestamp
$str=date("D dS M,Y h:i a") . ",". $_SERVER['REMOTE_ADDR'] .",".$QUERY_STRING.",".$hostname.",".$_SERVER['HTTP_USER_AGENT'].",".$_SERVER['HTTP_REFERER']."\n";



if(isset($_GET["identifier"])){
	file_put_contents("tracker.txt", $str, FILE_APPEND);	
}
elseif(isset($_GET["identifier2"])){
	file_put_contents("tracker-LaBellasera-01_January_2013.txt", $str, FILE_APPEND);
}
elseif(isset($_GET["identifier3"])){
	file_put_contents("tracker-Yotel-01_January_2013.txt", $str, FILE_APPEND);
}
elseif(isset($_GET["identifier4"])){
	file_put_contents("tracker-CrownePlaza-01_January_2013.txt", $str, FILE_APPEND);
}
elseif(isset($_GET["identifier5"])){
	file_put_contents("tracker-Inn_at_onu-01_January_2013.txt", $str, FILE_APPEND);
}
elseif(isset($_GET["identifier6"])){
	file_put_contents("tracker-Roger-01_January_2013.txt", $str, FILE_APPEND);
}
elseif(isset($_GET["identifier7"])){
	file_put_contents("tracker-New_York_Palace-01_January_2013.txt", $str, FILE_APPEND);
}

header("content-type: image/gif");
//43byte 1x1 transparent pixel gif
echo base64_decode("R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==");
*/




?>