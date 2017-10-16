<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "READ.txt";

if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y//m/d H:i:s"));

    fclose($file);

}
//Nome do arquivo e para onde ele vai
//renomeia o nome e o caminho

//moveu o arquivo para o dir2
rename($dir1.DIRECTORY_SEPARATOR.$filename, $dir2.DIRECTORY_SEPARATOR.$filename);







?>