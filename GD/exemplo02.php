<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0,0,0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);

imagestring($image, 5, 440, 350, "The Best", $titleColor);

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("Y-m-d"), $titleColor);


header("Content-type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg");

imagedestroy($image);








?>