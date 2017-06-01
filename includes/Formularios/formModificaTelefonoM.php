<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\GestorMedicos as GM;
	//$lista = new GestorPacientes();
	$telefono = $_POST['Telefono'];
	$dni = $_POST['dni'];
	//$modifica = $lista->modificaEmail($email, $dni);
	GM::modificaTelefono($telefono, $dni);
	
	header("Location: ../../panelAdministracion.php");
		
 ?>