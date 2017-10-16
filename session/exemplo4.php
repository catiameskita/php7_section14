<?php

session_id('mnaeknb22uho70pcqnpnvu23km');

require_once("config.php");

//útil por questões de segurança

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>