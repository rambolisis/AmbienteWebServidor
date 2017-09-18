<?php /*impuesto*/


$a=$_POST['a'];

$b=$a;
$c=1;	
$numeroenpantalla=$a;
$repeticiones=0;


while ( $repeticiones<= 10) {

	
	echo "$numeroenpantalla<BR>";

	$numeroenpantalla=$b+$c;
	$c=$b;
	$b=$numeroenpantalla;
	



	$repeticiones++;
	# code...
}


?>