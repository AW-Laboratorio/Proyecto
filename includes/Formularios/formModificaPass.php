<?php
	require_once '/../config.php';
	//require_once '/../ModelScripts/GestorUsuarios.php';
	use \estatica\includes\ModelScripts\GestorUsuarios as GP;
	
	//$lista = new GestorUsuarios();
	
	$passActual = $_POST['Pass'];
	$passNueva1 = $_POST['PassN1'];
	$passNueva2 = $_POST['PassN2'];
	$dni = $_SESSION['DNI'];
	$ok = 'false';	//no se ha cambiado 

	if($passNueva1 == $passNueva2){
		$comprueba = GP::compruebaPass($dni, $passActual);//$lista->compruebaPass($dni, $passActual);
		if($comprueba){
			$modifica = GP::modificaPass($passNueva2, $dni);//$lista->modificaPass($passNueva2, $dni);
			$_SESSION['pass'] = $passNueva2;
			$ok = 'true';
		}
	}
	if($_SESSION['rol'] == 'Paciente')
		header("Location: ../../DatosPaciente.php?ok=$ok");
	else{
		header("Location: ../../DatosMedico.php?ok=$ok");
	}
		
 ?>