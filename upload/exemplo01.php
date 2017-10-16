

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>


<?php
//Variável Pré-Definida - $_SERVER["REQUEST_METHOD"]
//Variável Pré-Definida - $_FILES[]

if($_SERVER["REQUEST_METHOD"]=== "POST"){

    //Para recuperar um formulário enviado via GET usa-se o $_GET
    //Para recuperar um formulário enviado via POST usa-se o $_POST, mas só recupera strings
    //como é um arquivo multipart/form-data usamos o $_FILES para recolher a informação enviada via UPLOAD
    $file = $_FILES["fileUpload"];

    if($file["error"]){

        throw new Exception("Error: ".$file["error"]);
    }

    $dirUploads = "uploads";

    if(!is_dir($dirUploads)){

        mkdir($dirUploads);
    }

    if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){

        echo "Upload realizado com sucesso";
    }else{

        throw new Exception("Não foi possível realizar o upload.");

    };



}



?>