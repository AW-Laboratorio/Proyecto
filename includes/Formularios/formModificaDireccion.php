<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\GestorPacientes as GP;

	//$lista = new GestorPacientes();
	$dir = $_POST['Direccion'];
	$dni = $_SESSION['DNI'];
	//$modifica = $lista->modificaDireccion($dir, $dni);
	GP::modificaDireccion($dir, $dni);
	header("Location: ../../DatosPaciente.php");
		
 ?>