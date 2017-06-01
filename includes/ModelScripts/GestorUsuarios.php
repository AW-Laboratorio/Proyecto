<?php
	
	/*require_once '/../DaoScripts/DaoUsuarios.php';*/
	namespace estatica\includes\ModelScripts;
	use \estatica\includes\DaoScripts\DaoUsuarios as DU;
	
	class GestorUsuarios{

		private static $dao;

		//function __construct(){
		public static function GestorUsuarios(){
			self::$dao = DU::DaoUsuarios();
			if(!isset($_SESSION)) session_start();
		}

		public static function getUsuario($dni){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DU::seleccionaUsuario($dniN));
		}

		public static function comprobarLogin($dni, $pass){
		  $dniN = htmlspecialchars(trim(strip_tags($dni)));
	      $passN = htmlspecialchars(trim(strip_tags($pass)));
	      
	      //if($this->$dao->usuarioCorrecto($dniN) == 0){
	      if(DU::usuarioCorrecto($dniN) == 0){
	        //usuario no correcto, no existe
	        return false;
	      }else{
	        //$login = $this->$dao->compruebaLogin($dniN, $passN);
	        $login = DU::compruebaLogin($dniN, $passN);
	        return $login;
	      }
    	}

    	public static function insertarUsuario($dni, $pass){
          $dniN = htmlspecialchars(trim(strip_tags($dni)));
	      $passN = htmlspecialchars(trim(strip_tags($pass)));

	        if (self::comprobarDNI($dniN) && strlen($passN)>5){
		        if(DU::existeUsuario($dniN) == 0)
		        {
		          	$rolN = "Paciente";
		          	DU::insertaUsuario($dniN, $passN, $rolN);
		         	return true;
		      	}   
		        else
		        {
		          	return false;
		        }
	    	}
      	}

      	public static function borrarUsuario($dni){
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));

      		 DU::borraUsuario($dniN);

      	}

      	public static function compruebaPass($dni, $pass){
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
	      	$passN = htmlspecialchars(trim(strip_tags($pass)));

	      	if(DU::compruebaPass($dniN, $passN)){
	      		return true;
	      	}else{
	      		return false;
	      	}
      	}

      	public static function modificaPass($pass, $dni){
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
	      	$passN = htmlspecialchars(trim(strip_tags($pass)));

	      	DU::modificarPass($dniN, $passN);
      	}

      	public static function comprobarDNI($dni){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$letra = substr($dniN, -1);
			$numeros = substr($dniN, 0, -1);
			if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
				return true;
			}else{
				return false;
			}
		}

		public static function insertarUsuarioMedico($dni, $pass){
          	$dniN = htmlspecialchars(trim(strip_tags($dni)));
	      	$passN = htmlspecialchars(trim(strip_tags($pass)));

	        $rolN = "Medico";
		    DU::insertaUsuario($dniN, $passN, $rolN);
		         	
      	}

	}

?>