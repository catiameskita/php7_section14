<?php

$pessoas = array();

array_push($pessoas, array(
'nome'=>'João',
'idade' => 25
));

array_push($pessoas, array(
'nome'=>'Joana',
'idade'=> 26
));

echo json_encode($pessoas);

?>



