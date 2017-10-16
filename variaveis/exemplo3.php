<?php

//////////////////////////////////Tipos Básicos//////
$nome = "HCode";
$site = 'www.hcode.com-br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

/////////////////////////////////Tipos Compostos////

$frutas = array ("abacaxi", "laranja", "kiwi", "manga");


//echo $frutas[2] . "<br>";

$nascimento = new DateTime();

//var_dump($nascimento);

/////////////////////////////////Tipos Especiais - Resource, Null////////////////


$arquivo = fopen("exemplo3.php", "r");
var_dump($arquivo);


$nulo = NULL;

$vazio = "";



?>