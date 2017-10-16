<?php

require_once("config.php");


echo session_save_path();

echo "<br>";

var_dump(session_status());
echo "<br>";


switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Session Disabled";
		break;
	case PHP_SESSION_NONE:
		echo "Session None";
		break;
	case PHP_SESSION_ACTIVE:
		echo "Session Active";
		break;
}

?>