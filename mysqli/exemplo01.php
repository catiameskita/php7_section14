<?php

//Criacao de conexão com a Base de Dados//

$conn = new mysqli('localhost', 'root', '', 'dbphp7');

//verificação da ocorrência de algum erro

if($conn->connect_error){

    Echo "Error: " .$conn->connect_error;
    exit;
}
//Criaçao de um statment e de uma query//

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

//indicação do tipo de dado enviado, neste caso string string ss//
//os dados têm que ser passados por referência, logo a criação das variáveis//

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

//inserção de novo usuario


$login = "user";
$pass = "!#$%";

$stmt->execute();
?>
