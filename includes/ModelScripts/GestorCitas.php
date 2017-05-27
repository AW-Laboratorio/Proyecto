<?php
	
	/*require_once '/../DaoScripts/DaoCitas.php';*/
	namespace estatica\includes\ModelScripts;
	use \estatica\includes\DaoScripts\DaoCitas as DC;
	use ArrayObject;

	
	class GestorCitas{

		private $dao;
		
		function __construct(){
			$this->dao = new DaoCitas();
			if(!isset($_SESSION)) session_start();
		}
		
		public static function getCita($id){
			$Id = htmlspecialchars(trim(strip_tags($id)));
			return (DC::seleccionaCita($Id));
		}
		
		public static function getListaCitaPaciente($numAfiliado){
			$lista = DC::listaCitasPaciente($numAfiliado);
	      	$array = new ArrayObject();
		    for($i= 0; $i <sizeof($lista)-1 ; $i++){
		    	$array->append(new Cita($lista[$i]['IdCita'], $lista[$i]['NumAfiliado'],$lista[$i]['NumColegiado'], $lista[$i]['Fecha'], $lista[$i]['Hora']));
		  	}
	      	return $array;

      	}

		public static function getListaCitaMedico($numC){
			$lista = DC::listaCitasMedico($numC);
	      		$array = new ArrayObject();
	     		for($i= 0; $i <sizeof($lista)-1 ; $i++){
	     	 		$array->append(new Cita($lista[$i]['IdCita'], $lista[$i]['NumAfiliado'],$lista[$i]['NumColegiado'], $lista[$i]['Fecha'], $lista[$i]['Hora']));
	  	  		}
	      		return $array;
		}

		public static function insertarCita($numAfiliado, $numColegiado, $fecha, $hora){
          	$NumAfiliado = htmlspecialchars(trim(strip_tags($numAfiliado)));
	      	$NumColegiado = htmlspecialchars(trim(strip_tags($numColegiado)));
	        $Fecha = htmlspecialchars(trim(strip_tags($fecha)));
			$Hora = htmlspecialchars(trim(strip_tags($hora)));
	        DC::insertaCita($NumAfiliado, $NumColegiado, $Fecha, $Hora);
	    }
		
		public static function modificaCita($id, $fecha, $hora){
			$Id = htmlspecialchars(trim(strip_tags($id)));
			$Fecha = htmlspecialchars(trim(strip_tags($fecha)));
			$Horal = htmlspecialchars(trim(strip_tags($hora)));
		}

		public static function eliminaCita($id){
		$Id = htmlspecialchars(trim(strip_tags($id)));
		if(DC::existeCita($Id) == 1){
	        DC::eliminaCita($Id);
	        	return true;
	      	}else{
	        	return false;
      		}
      	}
    }
?>
