<?php


if(isset($_COOKIE["NOME_DO_COOKIE"])){


    //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

    //transforma para array e lê da array
 /*   $obj = json_decode($_COOKIE["NOME_DO_COOKIE"], true);

    Echo $obj["empresa"];*/

    //Lê do objecto
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj->empresa;
}



?>