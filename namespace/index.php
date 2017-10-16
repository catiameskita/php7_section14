<?php


require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Cátia");
$cad->setEmail("catia@gmail.com");
$cad->setSenha("123456");

$cad->registarVenda();




?>