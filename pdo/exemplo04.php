<?php
/**
 * Created by PhpStorm.
 * User: mesqu
 * Date: 12/10/2017
 * Time: 13:46
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Manuel";
$password = "2010";
$id = "2";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

Echo 'Dados Alterados';





?>