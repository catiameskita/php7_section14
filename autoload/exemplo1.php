<?php

function __autoload($nomeClasse){
	
	
	require_once("$nomeClasse.php");
	
}


echo '<br>';



$carro = new DelRey();

$carro->acelerar(80);



?>