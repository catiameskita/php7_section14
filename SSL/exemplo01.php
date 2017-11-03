<?php

//SSL Secure Sockets Layer

session_start();

//depois de verificar login senha reinicia o ID da Sessão

session_destroy();
//assim estamos a geral novo id de sessão sempre que recarreamos a página
session_start();

session_regenerate_id();

Echo session_id();


?>