<?php 
	session_start();
	include_once 'conexion.php';
	extract($_REQUEST);

	$sentencia = $bd->prepare('SELECT * FROM usuarios WHERE 
								nombre = ? AND clave = ?;');
	$sentencia->execute([$nombre,$clave]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location:../index.php');

	}elseif($sentencia->rowCount() == TRUE){
		$_SESSION['nombre'] = $datos->nombre;
		header('Location:../home.php');
	}
?>