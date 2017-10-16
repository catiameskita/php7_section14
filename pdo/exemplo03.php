<?php
/**
 * Created by PhpStorm.
 * User: mesqu
 * Date: 12/10/2017
 * Time: 13:46
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");



$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Jose";
$password = "0987";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();




?>