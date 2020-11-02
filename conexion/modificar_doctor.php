<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location:index.php');
	}

	include 'conexion.php';
	 extract($_REQUEST);

	$sentencia = $bd->prepare("UPDATE doctor SET nombre_completo = ?, direccion= ?, telefono = ? WHERE id = ?;");
	$resultado = $sentencia->execute([$nombre_completo,$direccion,$telefono, $id]);

	if ($resultado === TRUE) {
		header('Location:../paginas/doctores/index.php');
	}else{
		echo "Error";
	}
?>