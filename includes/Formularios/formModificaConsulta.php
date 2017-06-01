<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\GestorMedicos as GM;
	//$lista = new GestorPacientes();
	$consulta = $_POST['consulta'];
	$dni = $_POST['dni'];
	//$modifica = $lista->modificaEmail($email, $dni);
	GM::modificaConsulta($consulta, $dni);
	
	header("Location: ../../panelAdministracion.php");
		
 ?>