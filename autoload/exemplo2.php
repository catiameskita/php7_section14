<?php

//autoload de pastas diferentes

//permite registar
//standard PHP library;

function incluirClasses($nomeClasse){

	if(file_exists("$nomeClasse.php")=== true){
		
		require_once("$nomeClasse.php");

	}
		
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){

	if(file_exists("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php")=== true){
		
		require_once("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");

	}

});


echo '<br>';


$carro = new DelRey();

$carro->acelerar(80);








?>