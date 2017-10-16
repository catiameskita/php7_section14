<?php


class Pessoa{

	public $nome = 'Rasmus Lerdorf';

	protected $idade = 48;

	private $senha = '123456';


	public function verDados(){


		echo $this->nome .'<br>';
		echo $this->idade .'<br>';
		echo $this->senha .'<br>';

	}

}


$objecto = new Pessoa();

//echo $objecto->nome;
$objecto->verDados();

var_dump($objecto->verDados());

//echo $objecto->senha;


?>