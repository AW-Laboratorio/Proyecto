<?php
	
	/*require_once '/../DaoScripts/DaoMedicos.php';*/
	namespace estatica\includes\ModelScripts;
	use \estatica\includes\DaoScripts\DaoMedicos as DM;
	use ArrayObject;
	
	class GestorMedicos{

		private $dao;

		function __construct(){
			$this->dao = new DaoMedicos();
			if(!isset($_SESSION)) session_start();
		}

		public static function getMedico($dni){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			//return ($this->dao->seleccionaMedico($dniN));
			return (DM::seleccionaMedico($dniN));
		}

		public static function buscaMedico($numCol){
			$numColN = htmlspecialchars(trim(strip_tags($numCol)));
			return (DM::buscaMedico($numColN));
		
		}

		public static function buscaNumColegiado($dni){
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DM::buscaNumColegiado($dniN));
      	}

      	/*public static function buscaMedicoPorEspecialidad($esp){
      		$espN = htmlspecialchars(trim(strip_tags($esp)));
			$lista = DM::buscaMedicoPorEspecialidad($sespN);
	      	$array = new ArrayObject();
	      	for($i= 0; $i <sizeof($lista)-1 ; $i++){
	     	 	$array->append(new Medico($lista[$i]['IdMedico'], $lista[$i]['NumColegiado'],$lista[$i]['Nombre'], $lista[$i]['Apellidos'], $lista[$i]['DNI'], $lista[$i]['Consulta'], $lista[$i]['Telefono'], $lista[$i]['Correo'], $lista[$i]['Especialidad']));
	  	  	}
	      	return $array;
		}*/
		public static function buscaMedicoPorEspecialidad($esp){
      		$espN = htmlspecialchars(trim(strip_tags($esp)));
			return (DM::buscaMedicoPorEspecialidad($espN));
      	}

		public static function listaEspecialidades(){
			return (DM::listaEspecialidades());
		}


      	public static function getListaMedico(){
      	  $lista = DM::listaMedico();
	      $array = new ArrayObject();
	     	for($i= 0; $i <sizeof($lista)-1 ; $i++){
	     	 	$array->append(new Medico($lista[$i]['IdMedico'], $lista[$i]['NumColegiado'],$lista[$i]['Nombre'], $lista[$i]['Apellidos'], $lista[$i]['DNI'], $lista[$i]['Consulta'], $lista[$i]['Telefono'], $lista[$i]['Correo'], $lista[$i]['Especialidad']));
	  	  	}
	      return $array;

      	}

      	public static function modificaEmail($email, $dni){
      		$emailN = htmlspecialchars(trim(strip_tags($email)));
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DM::modificaEmail($emailN, $dniN));
      	}

      	public static function modificaTelefono($tfno, $dni){
      		$tfnoN = htmlspecialchars(trim(strip_tags($tfno)));
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DM::modificaTelefono($tfnoN, $dniN));
      	}

      	public static function modificaConsulta($consulta, $dni){
      		$consultaN = htmlspecialchars(trim(strip_tags($consulta)));
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DM::modificaConsulta($consulta, $dniN));
      	}

      	public static function borraMedico($dni){
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DM::eliminaMedico($dniN));
      	}

      	public static function insertarMedico($numcol, $nombre, $apellidos, $dni, $email, $tfno, $consulta, $especialidad){
          	$numcolN = htmlspecialchars(trim(strip_tags($numcol)));
	      	$nombreN = htmlspecialchars(trim(strip_tags($nombre)));
	      	$apellidosN = htmlspecialchars(trim(strip_tags($apellidos)));
	        $dniN = htmlspecialchars(trim(strip_tags($dni)));
	        $emailN = htmlspecialchars(trim(strip_tags($email)));
	        $tfnoN = htmlspecialchars(trim(strip_tags($tfno)));
	        $consultaN = htmlspecialchars(trim(strip_tags($consulta)));
	        $especialidadN = htmlspecialchars(trim(strip_tags($especialidad)));

	        if(DP::existePaciente($dniN) == 0)
	        {
	          	DP::insertaPaciente($numcolN, $nombreN, $apellidosN, $dniN, $emailN, $tfnoN, $consultaN, $especialidadN);
	         	return true;
	      	}   
	        else
	        {
	          return false;
	        }
      	}
	}

?>