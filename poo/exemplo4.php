<?php


class Endereco{



	private $rua;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){

		$this->rua = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	//última coisa a ser executada antes de libertar memória;
	public function __destruct(){

		var_dump('DESTRUIR');


	}
	
	public function __toString(){

		return $this->rua .', '.$this->numero.' - '.$this->cidade;
	}


}


$myEndereco = new Endereco('Estrada Monumental', '200', 'Funchal'); 

var_dump($myEndereco);

echo '<br>';

//unset($myEndereco);

echo($myEndereco);

echo '<br>';

?>