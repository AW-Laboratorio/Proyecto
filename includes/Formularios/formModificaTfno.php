<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\GestorPacientes as GP;
	use \estatica\includes\Aplicacion as App;

	//$lista = new GestorPacientes();
	$tfno = $_POST['Telefono'];
	
	$app = App::getSingleton();
    
    if ($app->tieneRol('Admin')){
    	$dni = $_POST['dni'];
    }else{
    	$dni = $_SESSION['DNI'];
    }
	//$modifica = $lista->modificaTelefono($tfno, $dni);
	GP::modificaTelefono($tfno, $dni);
	
	header("Location: ../../DatosPaciente.php");
		
 ?>