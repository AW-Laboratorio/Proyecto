<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\Medicos as GM;
	//$lista = new GestorPacientes();
	$email = $_POST['Email'];
	$dni = $_POST['dni'];
	//$modifica = $lista->modificaEmail($email, $dni);
	GM::modificaEmail($email, $dni);
	
	header("Location: ../../panelAdministracion.php");
		
 ?>