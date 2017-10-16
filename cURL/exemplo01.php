<?php

$cep = "01001000";
//link para o webservice
$link = "https://viacep.com.br/ws/$cep/json/";

//Client URL
//inicializa a cURL sessão
$ch = curl_init($link);

//Set an option for a cURL transfer

curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

//execução
$response = curl_exec($ch);
//fecho
curl_close($ch);

//true ->transforma em array
$data = json_decode($response, true);

print_r($data);
Echo '<br>';
print_r($data['localidade']);
?>