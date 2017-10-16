<?php

$name = "images";

if(!is_dir($name)){

    mkdir($name);
    Echo "Directório $name criado com sucesso";
}else{

    rmdir($name);
    Echo "Directório $name já existe e foi removido";

}



?>