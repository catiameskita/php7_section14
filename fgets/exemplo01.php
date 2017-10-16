<?php

$filename = "usuarios.csv";

//fgets - retorna a primeira linha do arquivo

if(file_exists($filename)){


    $file = fopen($filename, "r");

    $headers = explode("," , fgets($file));

    $data = array();

    while($row = fgets($file)){

        //explode - transforma os dados do csv em array
        //atribui cada item às diferentes posições do array [0] [1] [2] [3].....
        $rowData = explode("," , $row);
        $linha = array();

        for($i=0; $i<count($headers); $i++){

            $linha[$headers[$i]] = $rowData[$i];

        }
        array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);
}


?>