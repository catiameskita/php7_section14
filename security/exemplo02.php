<?php
//Como evitar o SQL injection

$id = (isset($_GET["id"]))?$_GET["id"]:1;

//verificar se não é numérico e se é string
if(!is_numeric($id)|| strlen($id) >5){
    exit("Pagamos Você!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)){

    echo $resultado->deslogin . "<br>";


}
?>



