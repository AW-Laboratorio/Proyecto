<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorPacientes.php';
	use \estatica\includes\ModelScripts\GestorUsuarios as GU;
	use \estatica\includes\Aplicacion as App;

	//$lista = new GestorPacientes();
	$email = $_POST['Email'];
	
	$app = App::getSingleton();
    
    if ($app->tieneRol('Admin')){
    	$dni = $_GET['data'];
    }else{
    	$dni = $_SESSION['DNI'];
    }
	//$modifica = $lista->modificaTelefono($tfno, $dni);
	GU::borrarUsuario($dni);
	
	header("Location: ../../panelAdministracion.php");
		
 ?>

