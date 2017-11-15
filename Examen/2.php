<?php /*2.php*/

$datos=new Fecha(1,8,91);

class Fecha {

	public $dia;
	public $mes;
	public $anno;
	public $manana;

	Function __construct($dia,$mes,$anno){
		$this-> dia=$dia;
		$this-> mes=$mes;
        $this-> anno=$anno;
	}

	function manana(){


      $mananaa=$dia+1;

	}

	function ayer(){

		 $ayer=$dia-1;

		
	}
	function dehoyenocho(){

		 $dehoyenocho=$dia+8;

		
	}




}

echo $datos -> manana()."<br>";

