<?php /*index.php*/

echo "<H1>Index </H1>";

$db=new mysqli("localhost","usuario","1234","registro civil");

$sql="select * from personas";

$consulta=$db->query($sql);

if($consulta===FALSE){
	echo "<H2> Error.".$db->error."</H2>";
}

//recorremos el conjunto de filas 

while ($fila=$consulta-> fetch_assoc()) {
	$link="Details.php?cedula=".$fila['Cedula'];
	$nombre=$fila['Nombre']."".$fila['Apellido1'];
	echo "<a href='$link'>$nombre</a><br>";

echo "Nombre: ". $fila['Nombre']."<br>"."Ced: ".$fila['Cedula']."<br>";	# code...
}


echo "<H1> <hr><a href='Insert.php'> Insetar datos  </a> </H1>";

$db->close();
?>

