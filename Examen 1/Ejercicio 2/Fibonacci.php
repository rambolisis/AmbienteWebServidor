
<?php /*impuesto*/



$a=0;

	$b=$a;
$c=1;	
$numeroenpantalla=$a;
$repeticiones=0;




while ( $repeticiones<= 20) { 

	echo "$repeticiones-";
	echo "$numeroenpantalla<BR>";

	$numeroenpantalla=$b+$c;
	$c=$b;
	$b=$numeroenpantalla;
	



	$repeticiones++;
	# code...
}

	# code...





?>