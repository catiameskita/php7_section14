<?php

$json = '[{"nome":"Jo\u00e3o","idade":25},{"nome":"Joana","idade":26}]
';

$data = json_decode($json, true);

var_dump($data);

?>