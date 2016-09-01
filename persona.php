<?php


interface Persona{
	public $velocidad = 0;
	public $distancia = 0;

	public function caminar()
	{
		for ($recorrido=1; $recorrido < 1000 ; $recorrido++) { 
			//$distancia= $distancia+1;
			if(($recorrido % 450) == 0){
				$velocidad = 4 * 3;
				$recorrido = $recorrido + 50;

			}else{
				$velocidad = 4;
			}

			echo "Su Distancia es: ".$recorrido."<br> Su velocidaddad es: ". $velocidad. "<br>";
		}
	}
}