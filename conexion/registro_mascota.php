  <?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'conexion.php';

	 extract($_REQUEST);
	 
 if ($_REQUEST['radiot']=="gato") {

	$tipo="gato";
}else{
	$tipo="perro";
	}
if ($_REQUEST['radiog']=="femenino") {

	$genero="hembra";
}else{
	$genero="macho";
	}
if ($_REQUEST['radioe']=="vivo") {

	$estado="vivo";
}else{
	$estado="muerto";
	}

	// $ = $_POST['nombre_completo'];
	// $materno = $_POST['direccion'];
	// $nombre = $_POST['telefono'];
	
    $fecha_add = date("y/m/d");
	$sentencia = $bd->prepare("INSERT INTO mascota(nombre,tipo,genero,fecha_n,estado,fecha_add) VALUES (?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$nombre,$tipo,$genero,$fecha_n,$estado,$fecha_add]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location:../paginas/clientes/index.php');
	}else{
		echo "Error";
	}
?>