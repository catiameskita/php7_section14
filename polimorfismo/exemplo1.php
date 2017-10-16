<?php

//recurso utilizado com herança
//método na classe pai e poderei ter na classe filho um método com o mesmo nome mas com comportamento diferente. 

//$this - > Refere-se ao objecto instanciado
//parent -> Refere-se à classe Pai

abstract class Animal {

	public function falar(){

 		return 'Som';

	}


	public function mover(){

		return 'Anda';

	}

}


class Cachorro extends Animal {

	public function falar(){

		return 'Ladra';
	}


}


class Gato extends Animal{

	public function falar(){

		return 'Mia';
	}

}

class Passaro extends Animal{

	public function falar(){

			return 'Canta';
	}

	public function mover(){

			return 'Voa e '. parent::mover();


	}

}

$pluto = new Cachorro;

echo $pluto->falar().'<br/>';
echo $pluto->mover().'<br/>';

echo '------------------<br/>';

$garfield = new Gato();

echo $garfield->falar().'<br/>';
echo $garfield->mover().'<br/>';

echo '------------------<br/>';

$verdilhao = new Passaro;

echo $verdilhao->falar().'<br/>';
echo $verdilhao->mover().'<br/>';


?>