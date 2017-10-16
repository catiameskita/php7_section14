<?php

//data search name, padrão de conexão com a base de dados

$conn = new PDO("sqlsrv:Database=dbphp7; server=localhost\SQLEXPRESS; ConnectionPooling=0", "root", "");



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