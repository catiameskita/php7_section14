<?php

//permissão de pastas
// 0 - não existe permissão nenhnuma
// 1 - permissão de execução
// 2 - permissão de gravação
// 3 - junção do 1 e do 2 execução e gravação
// 4 - permissão de leitura
// 5 - leitura e execução
// 6 - leitura e gravação
// 7 - leitura gravação e execução

//como funciona o conjunto de permissões do UNIX
//exemplo 775
// 1º digito - representa as permissões de quem criou a pasta
// 2º dígito - representa as permissões do grupo de usuarios
// 3º dígito - representa as permissões de outros usuarios


$pasta = "arquivos";
$permission = "0775";

if(!is_dir($pasta)) mkdir($pasta, $permission);

Echo "Directório criado com sucesso!";




?>



