<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\GestorPacientes as GP;

	//$lista = new GestorPacientes();
	$tfno = $_POST['Telefono'];
	$dni = $_SESSION['DNI'];
	//$modifica = $lista->modificaTelefono($tfno, $dni);
	GP::modificaTelefono($tfno, $dni);
	
	header("Location: ../../DatosPaciente.php");
		
 ?>