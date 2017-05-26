<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\GestorPacientes as GP;
	//$lista = new GestorPacientes();
	$email = $_POST['Email'];
	$dni = $_SESSION['DNI'];
	//$modifica = $lista->modificaEmail($email, $dni);
	GP::modificaEmail($email, $dni);
	
	header("Location: ../../DatosPaciente.php");
		
 ?>