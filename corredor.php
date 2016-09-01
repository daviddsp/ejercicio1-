
<?php
//namespace david;




class Corredor{
	public $velocidad = 0;
	public $distancia = 0;

	public function sprint()
	{
		for ($recorrido=1; $recorrido < 1000 ; $recorrido++) { 
			//$distancia= $distancia+1;
			if(($recorrido % 900) == 0){

				$recorrido = $recorrido + 100;

			}else{
				$velocidad = 20;
			}

			echo "Su Distancia e: ".$recorrido."<br> Su velocidaddad es: ". $velocidad. "<br>";
		}
	}
}

