<?php

//Criacao de conexão com a Base de Dados//

$conn = new mysqli('localhost', 'root', '', 'dbphp7');

//verificação da ocorrência de algum erro

if($conn->connect_error){

    Echo "Error: " .$conn->connect_error;
    exit;
}

//Fazer consulta na Base de Dados e exibir dados no ecrã

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();
//este metodo fetch_array verifica se há dados e se existir retorna o dado//

    while($row = $result->fetch_assoc()){

        array_push($data, $row);

    }

    echo json_encode($data);

?>
