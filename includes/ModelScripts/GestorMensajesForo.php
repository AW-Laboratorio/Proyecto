<?php
	
	namespace estatica\includes\ModelScripts;
	
	use \estatica\includes\DaoScripts\DaoMensajesForo as DMF;
	use ArrayObject;
	
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

		public static function insertarmensajeforo($idforo, $Usuario, $Mensaje){
    
	        $UsuarioN = htmlspecialchars(trim(strip_tags($Usuario)));
	        $MensajeN = htmlspecialchars(trim(strip_tags($Mensaje)));
	        $IdForoN = htmlspecialchars(trim(strip_tags($idforo)));

	        DMF::insertamensajesforo($IdForoN, $UsuarioN, $MensajeN);
      	}

      	public static function modificarUsuariomensajesforo($Usuario, $IdInforme){
      		$Usuario = htmlspecialchars(trim(strip_tags($Usuario)));
      		$IdInforme = htmlspecialchars(trim(strip_tags($IdInforme)));
			return (DMF::modificaDireccion($Usuario, $IdInforme));
      	}

      public static function getListaMensajesForo($IdForo){
            $IdForoN = htmlspecialchars(trim(strip_tags($IdForo)));
            $lista = DMF::listaMensajesForo($IdForoN);
            $array = new ArrayObject();
            for($i= 0; $i < sizeof($lista)-1 ; $i++){
                $array->append(new Mensaje($lista[$i]['IdMensaje'], $lista[$i]['IdForo'],$lista[$i]['Usuario'], $lista[$i]['Mensaje'], $lista[$i]['Fecha']));
            }
            return $array;
        }

	}

?>