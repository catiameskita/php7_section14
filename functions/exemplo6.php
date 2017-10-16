<?php


$a = 10;

function trocaMesmo(&$p){

	$p += 100;

	return $p;

}

Echo trocaMesmo($a);

Echo "<br>";

Echo trocaMesmo($a);




?>