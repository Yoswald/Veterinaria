<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
	 extract($_REQUEST);

if ($_REQUEST['radiot']=="gato") {

	$tipo="gato";
}else{
	$tipo="perro";
	}

if ($_REQUEST['radios']=="hembra") {

	$genero="hembra";
}else{
	$genero="macho";
	}

if ($_REQUEST['radioe']=="vivo") {

	$estado="vivo";
}else{
	$estado="muerto";
	}


	$sentencia = $bd->prepare("UPDATE mascota SET nombre = ?, tipo = ?, genero = ?, fecha_n = ?, estado = ? WHERE id = ?;");
	$resultado = $sentencia->execute([$nombre,$tipo,$genero,$fecha_n,$estado,$id]);

	if ($resultado === TRUE) {
		header('Location:../paginas/mascotas/index.php');
	}else{
		echo "Error";
	}
?>