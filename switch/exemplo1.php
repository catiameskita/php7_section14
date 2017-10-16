<?php

$diaDaSemana = date("w");

switch ($diaDaSemana) {
	case 0: Echo "Domingo";
	break;
	
	case 1: Echo "Segunda-feira";
	break;

	case 2: Echo "Terça-feira";
	break;

	case 3: Echo "Quarta-feira";
	break;

	case 4: Echo "Quinta-feira";
	break;
	
	case 5: Echo "Sexta-feira";
	break;
	
	case 6: Echo "Sábado";
	break;
	

	default: Echo "Data Inválida";
		
		break;
}




?>