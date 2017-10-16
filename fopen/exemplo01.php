<?php

//o arquivo exige um processo
//abrir o arquivo - fazer as alterações - fechar o arquivo

//$file - manipulador a referência com o nosso arquivo
//w+ write e o mais faz a criação do arquivo uma vez que ele não existe - aponta para o início do arquivo
//a+ aponta para o final do arquivo e acrescenta informação (não apaga a anterior)

//A variável $file é do tipo resource uma vez que ela faz referência a um arquivo externo

// /r é o retorno /n nova linha

$file = fopen("log.txt","a+");
fwrite($file,date("Y-m-d H:i:s")."\r\n");
fclose($file);

Echo "Arquivo criado com sucesso";



?>