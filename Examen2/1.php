<?php /*1.php*/


$otro=new Fraccion(154,2);

class Fraccion {

	public $numerador;
	public $denominador;

	Function __construct($numerador,$denominador){
		$this-> numerador=$numerador;
		$this-> denominador=$denominador;
 
	}
	function sumar($numerador,$denominador){
		
		$suma=$numerador+$denominador;

		echo  "<b>  $this->el resultado de la sumatoria es ($suma)" ;

	}
	function restar($numerador,$denominador){
		
		$resta=$numerador-$denominador;

		echo "<b>  $this->el resultado de la resta es ($resta)" ;

	}
	function mutiplicar($numerador,$denominador){
		
		$multiplicacion=$numerador*$denominador;

		echo "<b>  $this->el resultado de la multoplicacion es ($multiplicacion)" ;

	}
	function dividir($numerador,$denominador){
		
		$division=$numerador/$denominador;

		echo "<b>  $this->el resultado de la division es ($division)" ;

	}
}

echo $otro -> sumar()."<br>";