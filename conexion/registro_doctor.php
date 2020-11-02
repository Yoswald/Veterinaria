<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'conexion.php';

	 extract($_REQUEST);
	// $ = $_POST['nombre_completo'];
	// $materno = $_POST['direccion'];
	// $nombre = $_POST['telefono'];
	
    $fecha_add = date("y/m/d");
	$sentencia = $bd->prepare("INSERT INTO doctor(nombre_completo,direccion,telefono,fecha_add) VALUES (?,?,?,?);");
	$resultado = $sentencia->execute([$nombre_completo,$direccion,$telefono,$fecha_add]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location:../paginas/doctores/index.php');
	}else{
		echo "Error";
	}
?>