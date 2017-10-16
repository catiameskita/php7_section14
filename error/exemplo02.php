<?php
//error_reporting() - subscreve o que está definido no php.ini
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;



?>