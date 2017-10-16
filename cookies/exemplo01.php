<?php

$data = array(
    "empresa" => "Hcode Treinamentos"
);

//é um arquivo físico criado no servidor e também no PC pessoal do utilizador

setcookie("NOME_DO_COOKIE",json_encode($data), time()+3600);

echo "OK";

?>