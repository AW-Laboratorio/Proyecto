<?php
require_once '/../config.php';
//require_once '/../ModelScripts/GestorInforme.php';
use \estatica\includes\ModelScripts\GestorNoticias as GN;
	
	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];

	GN::insertarNoticia($titulo, $texto);

	header("Location: ../../mensajesForo.php?data=$idforo&tema=$tema");
?>