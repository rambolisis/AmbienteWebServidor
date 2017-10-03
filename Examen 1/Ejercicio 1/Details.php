<h1>Detalles de persona</h1>
<?php /*detalles.php*/

$db=new mysqli("localhost","usuario","1234","registro civil");

if (isset($_GET['cedula'])) {
	$ced=$_GET['cedula'];
	$consulta=$db->prepare
              ("select * from personas where Cedula=?");
     $consulta-> bind_param("i",$ced);
     $consulta->execute();
     $filas=$consulta->get_result();
     $miFila=$filas->fetch_assoc();
     echo "<h2>".$miFila['Nombre']."</h2>";
     echo "Cedula : ".$miFila['Cedula']."<Br>";
    echo "Apellido 1: ".$miFila['Apellido1']."<Br>";
    echo "Apellido 2: ".$miFila['Apellido2']."<Br>";
    echo "Fecha Nacimiento: ".$miFila['Fechanacimiento']."<Br>";
    echo "Estado civil: ".$miFila['Estadocivil']."<Br>";
    echo "Provincia: ".$miFila['Provincia']."<Br>";
    echo "Canton: ".$miFila['Canton']."<Br>";
    echo "Distrito: ".$miFila['Distrito']."<Br>";




     echo "<hr><a href='index.php'> Regresar </a>";
	}

else {
        echo "Burro maricon " ;  
        echo "<hr><a href='index.php'> Regresar </a>";     # code...
    }

$db->close();
?>
