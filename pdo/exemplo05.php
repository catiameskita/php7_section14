<?php
/**
 * Created by PhpStorm.
 * User: mesqu
 * Date: 12/10/2017
 * Time: 13:46
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//comando Delete exclui dados, não exclui estrutura sempre com WHERE
//comando drop exclui estrutura

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = :ID");


$id = "2";

$stmt->bindParam(":ID", $id);

$stmt->execute();

Echo 'Dados Apagados';





?>