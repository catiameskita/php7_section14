<?php

//data search name, padrão de conexão com a base de dados

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


///tem array dentro de array
///primeiro foreach acessa o primeiro array
////segundo foreach acessa o segundo array

foreach ($results as $row){

    foreach ($row as $key =>$value){

        echo "<strong> $key </strong> $value<br>";

}

echo "#######################################<br>";
}









?>