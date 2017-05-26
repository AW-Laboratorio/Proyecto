<?php
	
	/*require_once '/../DaoScripts/DaoMensajesForo.php';*/
	namespace estatica\includes\ModelScripts;
	use \estatica\includes\DaoScripts\DaoMensajesForo as DMF;
	
	class GestorMensajesForo{

		private $dao;

		function __construct(){
			$this->dao = new DaoMensajesForo();
			if(!isset($_SESSION)) session_start();
		}

		public static function getmensajesforo($IdInforme){
			$dniN = htmlspecialchars(trim(strip_tags($Idinforme)));
			return (DMF::seleccionamensajesforo($Idinforme));
		}

		public static function insertarmensajeforo($Usuario, $Mensaje, $Fecha){
    
	        $Usuario = htmlspecialchars(trim(strip_tags($Usuario)));
	        $Mensaje = htmlspecialchars(trim(strip_tags($Mensaje)));
	        $Fecha = htmlspecialchars(trim(strip_tags($Fecha)));

	        if(DMF::existemensajesforo($IdInforme) == 0)
	        {
	          	DMF::insertamensajesforo($Usuario, $Mensaje, $Fecha);
	         	return true;
	      	}   
	        else
	        {
	          return false;
	        }
      	}

      	public static function modificarUsuariomensajesforo($Usuario, $IdInforme){
      		$Usuario = htmlspecialchars(trim(strip_tags($Usuario)));
      		$IdInforme = htmlspecialchars(trim(strip_tags($IdInforme)));
			return (DMF::modificaDireccion($Usuario, $IdInforme));
      	}

	}

?>