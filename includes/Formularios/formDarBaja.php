<?php
	require_once '/../config.php';
	use \estatica\includes\ModelScripts\GestorUsuarios as GU;
	//require_once '/../ModelScripts/GestorUsuarios.php';

	//$lista = new GestorUsuarios();
	$dni = $_POST['dni'];
	GU::borrarUsuario($dni);
	
	header("Location: ../../index.php");
		
 ?>