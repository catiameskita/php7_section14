<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){

Echo "Você é uma Criança";

} elseif($qualASuaIdade < $idadeMaior ) {

Echo "Você não é um adolescente";

} elseif ($qualASuaIdade < $idadeMelhor){

	Echo "Você é um adulto";
}else {
	Echo "Você é um idoso";
}

Echo "<br>";


Echo ($qualASuaIdade<$idadeMaior)?"Menor de Idade":"Maior de Idade";


?>