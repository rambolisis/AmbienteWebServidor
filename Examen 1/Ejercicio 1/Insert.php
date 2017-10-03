

<h2>Insetar datos</h2>
<form action="Insert.php" method="post">
Cedula: <input type="text" name="ced"><br>
Nombre: <input type="text" name="nom"><br>
Apellido1: <input type="text" name="ape1"><br>
Apellido2: <input type="text" name="ape2"><br>
Fecha Nac (AAAA-MM-DD):<input type="text" name="fec"><br>
Estado Civil: <input type="text" name="Esta"><br>
Provincia: <input type="text" name="Pro"><br>
Canton: <input type="text" name="Can"><br>
Distrito: <input type="text" name="Dis"><br>
<button type="submit"> Crear </button>
</form>
<?php /* Insert.php*/



$db=new mysqli("localhost","usuario","1234","registro civil");
if (isset($_POST['ced'])) {
	if (!empty($_POST['ced'])) {
		$nomb=$_POST['nom'];
		$apel1=$_POST['ape1'];
		$apel2=$_POST['ape2'];
		$cedu=$_POST['ced'];
		$fecha=$_POST['fec'];
		$Estadociv=$_POST['Esta'];
		$Provi=$_POST['Pro'];
		$Canton=$_POST['Can'];
		$Distrito=$_POST['Dis'];

		$consulta=$db->prepare
		("insert into personas(Cedula , Nombre , Apellido1, Apellido2, Fechanacimiento, Estadocivil, Provincia, Canton, Distrito) values(?,?,?,?,?,?,?,?,?)");
		$consulta->bind_param("issssssss", $cedu, $nomb , $apel1, $apel2, $fecha, $Estadociv, $Provi, $Canton, $Distrito);
		$consulta->execute();
		if ($consulta->affected_rows>0) {
			echo "<h2>Insecion exitosa</h2>";
			echo "<a href='Index.php'> Regresar </a>";
		# code...
		}
		else{
		echo "<h2>Fallo de verga </h2>";
		echo "<h3>".$db->error."</h3>";
		echo "<a href= 'Index.php'>Regresar</a>";
		 echo "<hr><a href='Insert.php'> Regresar </a>";
		}	
	# code...
		# code...
	}
	
}



$db->close();
?>