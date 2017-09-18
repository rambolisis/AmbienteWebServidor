<?php /*impuesto*/


$a=$_POST['a']; $b=$_POST['b']; $c=$_POST['c'];

$porcentage= $b/100  * $a ;
$vuelto= $c- ($a+$porcentage);
$total =$a+$porcentage;

if ($c <= $total) {

	echo "El cliente no puede pagar el articulo<br>";
	echo "El valor total es de : $total y el cliente pago con $c <br>";
	# code...
}else{
	
	echo "el tota es : $total <br>" ;
	echo "el vuelto es : $vuelto <br>";

	echo "el impuesto del producto es : $porcentage <br>";

}






?>