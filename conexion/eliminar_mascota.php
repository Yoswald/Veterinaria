<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include 'conexion.php';
	$sentencia = $bd->prepare("DELETE FROM mascota WHERE id= ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location:../paginas/mascotas/index.php');
	}else{
		echo "Error";
	}

?>