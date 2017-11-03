<?php

//Slim micro framework para Rotas

//ajuda no SEO - uma vez que personaliza o URL

require_once ("vendor/autoload.php");


$app = new \Slim\Slim();

$app->get('/', function(){

    Echo "Home Page";
});

//usada para criar rota que vai ter acesso através do método GET
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});




$app->run();



?>