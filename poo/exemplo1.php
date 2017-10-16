<?php


class Pessoa  {
	//atributo
	//encapsulamento public
	public $nome;

	//método
	//encapsulamento public
	public function falar(){

		return "O meu nome é ".$this->nome;

	}
}



$sofia = new Pessoa();

$sofia->nome = "Sofia Durão";

echo $sofia->falar();







?>