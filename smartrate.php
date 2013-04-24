<?php
$url = 'http://webservices.hebsdigital.com/hotelprices/nypalace';
$data = file_get_contents($url);
$data = json_decode($data, true);

    header("Content-type: image/jpeg");
    $imgPath = 'nypalace.png';
    $image = imagecreatefrompng($imgPath);
    $color = imagecolorallocate($image, 255, 255, 255);
    $fontSize = 300;
    $x = 115;
    $string = 'Tonight\'s Rate: $'.$data['price']['roomrate'];
	$y = 305;
   



$font = array(
	'size'=>30,
	'angle'=>0,
	'x-offset'=>10,
	'y-offset'=>350,
	'file'=>'DIGITALDREAM.ttf',
	'color'=>imagecolorallocate($image, 255, 255, 255),
);
imagettftext ($image , $font['size'] , $font['angle'] , $font['x-offset'] , $font['y-offset'] , $font['color'] , $font['file'], $string );

//	 imagestring($image, $fontSize, $x, $y, $string, $color);
    imagejpeg($image);




?>
