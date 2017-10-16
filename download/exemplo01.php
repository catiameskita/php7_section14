<?php

$link ="https://www.google.pt/logos/doodles/2017/olaudah-equianos-272nd-birthday-5190660549246976-l.png";

//file_get_contents lê o binário deste arquivo, pode ser um ficheiro local ou um url
$content = file_get_contents($link);

//parse_url() - transforma o que vem pela url num ficheiro real
$parse = parse_url($link);

//basename()
$basename = basename($parse["path"]);

//recebe o arquivo e
$file = fopen($basename, "w+");


fwrite($file,$content);

fclose($file);

/*o igual representa um echo porque é o primeiro comando do PHP que foi aberto e fechado na mesma linha*/
?>


<img src="<?=$basename?>">
