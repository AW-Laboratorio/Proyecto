<?php
	
	/*require_once '/../DaoScripts/DaoPacientes.php';*/
	namespace estatica\includes\ModelScripts;
	use \estatica\includes\DaoScripts\DaoPacientes as DP;
	use ArrayObject;
	
	class GestorPacientes{

		private $dao;

		function __construct(){
			$this->dao = new DaoPacientes();
			if(!isset($_SESSION)) session_start();
		}

		public static function getPaciente($dni){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DP::seleccionaPaciente($dniN));
		}

		public static function insertarPaciente($numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo){
          	$numSSN = htmlspecialchars(trim(strip_tags($numSS)));
	      	$nombreN = htmlspecialchars(trim(strip_tags($nombre)));
	      	$apellidosN = htmlspecialchars(trim(strip_tags($apellidos)));
	        $dirN = htmlspecialchars(trim(strip_tags($dir)));
	        $dniN = htmlspecialchars(trim(strip_tags($dni)));
	        $emailN = htmlspecialchars(trim(strip_tags($email)));
	        $tfnoN = htmlspecialchars(trim(strip_tags($tfno)));
	        $fechaNN = htmlspecialchars(trim(strip_tags($fechaN)));
	        $sexoN = htmlspecialchars(trim(strip_tags($sexo)));

	        if(DP::existePaciente($dniN) == 0)
	        {
	          	DP::insertaPaciente($numSSN, $nombreN, $apellidosN, $dirN, $dniN, $emailN, $tfnoN, $fechaNN, $sexoN);
	         	return true;
	      	}   
	        else
	        {
	          return false;
	        }
      	}

      	public static function modificaDireccion($dir, $dni){
      		$dirN = htmlspecialchars(trim(strip_tags($dir)));
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DP::modificaDireccion($dirN, $dniN));
      	}

      	public static function modificaEmail($email, $dni){
      		$emailN = htmlspecialchars(trim(strip_tags($email)));
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DP::modificaEmail($emailN, $dniN));
      	}

      	public static function modificaTelefono($tfno, $dni){
      		$tfnoN = htmlspecialchars(trim(strip_tags($tfno)));
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DP::modificaTelefono($tfnoN, $dniN));
      	}

      	public static function buscaNumAfiliado($dni){
      		$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return (DP::buscaNumAfiliado($dniN));
      	}

      	public static function buscaPaciente($numA){
			$numAN = htmlspecialchars(trim(strip_tags($numA)));
			return (DP::buscaPaciente($numAN));
		}

		public static function existeNumAfiliado($numA){
			$numAN = htmlspecialchars(trim(strip_tags($numA)));
			return (DP::existeNumAfiliado($numAN));
		}

		public static function existeEmail($email){
			$emailN = htmlspecialchars(trim(strip_tags($email)));
			return (DP::existeEmail($emailN));
		}

		public static function getListaPaciente(){
      	  $lista = DP::listaPaciente();
	      $array = new ArrayObject();
	     	for($i= 0; $i <sizeof($lista)-1 ; $i++){
	     	 	$array->append(new Paciente($lista[$i]['IdPaciente'], $lista[$i]['NumAfiliado'],$lista[$i]['Nombre'], $lista[$i]['Apellidos'], $lista[$i]['Direccion'], $lista[$i]['DNI'], $lista[$i]['Correo'], $lista[$i]['Telefono'], $lista[$i]['FechaNac'], $lista[$i]['Sexo']));
	  	  	}
	      return $array;

      	}
	}

?>