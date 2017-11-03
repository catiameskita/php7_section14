<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

//return array|bool an array with 7 elements.
//Index 0 and 1 contains respectively the width and the height of the image.
$data = getimagesize($file);

$width = $data[0];
$height = $data[1];

//list()->Returns the assigned array.
list($old_width, $old_height) = getimagesize($file);


//Create a new true color image
$new_image = imagecreatetruecolor($new_width, $new_height);

//Create a new image from file or URL
$old_image = imagecreatefromjpeg($file);

//Copy and resize part of an image with resampling
imagecopyresampled($new_image, $old_image, 0,0,0,0,$new_width, $new_height, $old_width, $old_height);

//Output image to browser or file
imagejpeg($new_image);

//Destroy an image
imagedestroy($old_image);
imagedestroy($new_image);







?>