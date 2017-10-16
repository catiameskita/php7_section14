<?php
//Interface ajuda:
//Organização do Código
//Trabalho em Equipa
//Integração de API's

interface Veiculo {

	public function acelerar($velocidade);
	
	public function travar($metros);

	public function trocaMarcha($marcha);

}

//Uma Classe pode implementar várias interfaces

class Civic implements Veiculo{ //, OutraInterface{


	//o parametro pode receber outro nome
	//o método tem que ter o mesmo nome

	public function acelerar($velocidade){

		echo 'O Veículo acelerou até '.$velocidade. ' Km/h!';


	}

	public function travar($metros){

		echo 'O Veículo imobilizou-se em '.$metros. ' m!';


		
	}

	public function trocaMarcha($marcha){

		echo 'o Veículo inverteu a '.$marcha. ' Km/h!';

		
	}





}

$carro = new Civic();

$carro->travar('200');








?>