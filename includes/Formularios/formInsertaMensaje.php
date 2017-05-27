<?php
require_once '/../config.php';
//require_once '/../ModelScripts/GestorInforme.php';
use \estatica\includes\ModelScripts\GestorMensajesForo as GMF;
	
	$idforo = $_POST['foro'];
	$mensaje = $_POST['msj'];
	$usuario = $_POST['nombre'];
	$tema = $_POST['tema'];

	if($usuario == ''){
		$usuario = 'Anónimo';
	}

	GMF::insertarmensajeforo($idforo, $usuario, $mensaje);

	header("Location: ../../mensajesForo.php?data=$idforo&tema=$tema");
?>