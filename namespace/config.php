<?php

//DIRECTORY_SEPARATOR tem a ver com a uniformização da barra dos diversos sistemas operativos; Assim vai correr sem problemas quer se encontre em win ou em Linux concatenamos esta constante em vez de escrever literalmente a /. 

//onde o projecto vai procurar as classes?

spl_autoload_register(function($nomeClasse){

	//var_dump($nomeClasse);

	$dirClass = "class";
	$filename = "$dirClass".DIRECTORY_SEPARATOR."$nomeClasse.php" ;
	

	if(file_exists($filename)){

		require_once($filename);

	}

});




?>