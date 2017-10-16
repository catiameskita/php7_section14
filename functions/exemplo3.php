<?php

function ola(){


return "Olá PT";

}


//Podemos atribuir um valor padrão $pais = "PT"
//Por defeito surge PT
//para carregar vazio faz-se echo ola1("")
//

function ola1($pais = "Pais Pre Definido", $favorite = "favorito"){


return "Este País: $pais é o meu $favorite";

}

echo ola();

echo "<br>";

echo ola1("ES");
echo "<br>";

echo ola1("NL");
echo "<br>";

echo ola1("DN","odiado");

?>