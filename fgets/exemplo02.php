<?php

$filename = "caty.gif";

//lê o conteúdo completo do ficheiro,faz o fopen, fsize,fclose
//conteúdo retorna em binário;
//vou converter para string com o base64

$base64 = base64_encode(file_get_contents($filename));

//padrão de exibição

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:".$mimetype.";base64,".$base64;

//estático
//echo "data:image/gif;base64,".$base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>


<img src="<?=$base64encode?>">

