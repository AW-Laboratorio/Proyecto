<?php
	require_once '/../config.php';
	use \estatica\includes\ModelScripts\GestorUsuarios as GU;
	use \estatica\includes\ModelScripts\GestorMedicos as GM;
	//require_once '/../ModelScripts/GestorUsuarios.php';

	//$lista = new GestorUsuarios();
	$dni = $_GET['data'];
	GU::borrarUsuario($dni);
	GM::borraMedico($dni);

	header("Location: ../../panelAdministracion.php");
		
 ?>