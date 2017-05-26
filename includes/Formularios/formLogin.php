<?php
	require_once '/../config.php';
	/*require_once '/../ModelScripts/GestorUsuarios.php';*/
	use \estatica\includes\ModelScripts\GestorUsuarios as GU;
		
	//$lista = GU::GestorUsuarios();
	$dni = $_POST['dni'];
	$pass = $_POST['pass'];
	$login = GU::comprobarLogin($dni, $pass);
	if($login){
		echo "true";
	}
	else
		echo "string";
	
	if(!$login){
		$ok = 'false';
		header("Location: ../../Login.php?ok=$ok");
	}
	else
	{
		$hola = $_SESSION['rol'];
		echo $hola;
		//header("Location: ../../index.php");
		if($app->tieneRol('Paciente')){
			//Es paciente va a su perfil
			header("Location: ../../DatosPaciente.php");
		}else if($app->tieneRol('Medico')){
			//Es médico, va a su perfil
			header("Location: ../../DatosMedico.php");
		}elseif ($app->tieneRol('Admin')) {
			//Es admin, va al panel de administracion
			header("Location: ../../panelAdmin.php");
		}
	}
 ?>


