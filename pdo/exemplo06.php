<?php
/**
 * Created by PhpStorm.
 * User: mesqu
 * Date: 12/10/2017
 * Time: 13:46
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//Comecar uma transacção
//Método -> commit - Confirmar o comando;
//Método -> rollback - desfazer o comando;

$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

Echo 'Dados Apagados';





?>