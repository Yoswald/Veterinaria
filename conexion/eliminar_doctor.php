<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include 'conexion.php';
	$sentencia = $bd->prepare("DELETE FROM doctor WHERE id= ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location:../paginas/doctores/index.php');
	}else{
		echo "Error";
	}

?>