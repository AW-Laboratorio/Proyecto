<?php
	/*require_once '/../ModelScripts/Medico.php';*/
	
	namespace estatica\includes\DaoScripts;
	require_once '/../config.php';
	use \estatica\includes\Aplicacion as App;
	use \estatica\includes\ModelScripts\Medico;
	
	class DaoMedicos{

		private $array;

		public static function seleccionaMedico($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM medicos WHERE DNI = '%s'", $con->real_escape_string($dni));
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$medico = new Medico($fila['IdMedico'], $fila['NumColegiado'], $fila['Nombre'], $fila['Apellidos'], $fila['DNI'], $fila['Consulta'], $fila['Telefono'], $fila['Correo'],$fila['Especialidad']);
				$rs->free();
				return $medico;
			}
			return false;
		}

		public static function insertaMedico($numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "INSERT INTO medicos (NumAfiliado, Nombre, Apellidos, Direccion, DNI, Correo, Telefono, FechaNac, Sexo) VALUES ($numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo)";
			$rs = $con->query($sql) or die ($con->error);
		}

		public static function eliminaMedico($dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "DELETE * FROM medicos WHERE DNI = '$dni'";
			$con->query($sql) or die ($con->error);
		}

		public static function existeMedico($dni, $email){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM medicos WHERE Correo='%s' OR DNI='%s'", $con->real_escape_string($email), $con->real_escape_string($dni));
			$rs = $con->query($sql) or die ($con->error);
			$numCol = $rs->num_rows;
			$rs->num_rows;
			return $numCol;
		}

		public static function modificarPerfil($nombre, $apellidos, $dir, $dni, $email, $tfno){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql="UPDATE Medicos SET Nombre='$nombre', Apellidos='$apellidos', Direccion='dir', Correo='$email', Telefono='$tfno' WHERE DNI='$dni'";
			$con->query($sql);
		}

		public static function buscaNombreMedico($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM medicos WHERE DNI='$dni'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$medico = $fila['Nombre'];
				$rs->free();
				return $medico;
			}
			return false;
			
		}

		public static function buscaMedico($numCol){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM medicos WHERE NumColegiado='$numCol'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$medico = new Medico($fila['IdMedico'], $fila['NumColegiado'], $fila['Nombre'], $fila['Apellidos'], $fila['DNI'], $fila['Consulta'], $fila['Telefono'], $fila['Correo'],$fila['Especialidad']);
				$rs->free();
				return $medico;
			}
			return false;
		}

		public static function buscaNumColegiado($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM medicos WHERE DNI='$dni'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$paciente = $fila['NumColegiado'];
				$rs->free();
				return $paciente;
			}
			return false;
		}

		/*public static function buscaMedicoPorEspecialidad($esp){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM medicos WHERE Especialidad ='$esp'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$medico = new Medico($fila['IdMedico'], $fila['NumColegiado'], $fila['Nombre'], $fila['Apellidos'], $fila['DNI'], $fila['Consulta'], $fila['Telefono'], $fila['Correo'],$fila['Especialidad']);
				$rs->free();
				return $medico;
			}
			return false;
		}*/

		public static function buscaMedicoPorEspecialidad($esp){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM medicos WHERE Especialidad='$esp'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$paciente = $fila['NumColegiado'];
				$rs->free();
				return $paciente;
			}
			return false;
		}

		public static function listaEspecialidades(){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("SELECT Especialidad FROM medicos");
			$rs = $con->query($sql) or die ($con->error);
			return mysql_result($rs);
		}


		public static function listaMedico(){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM medicos ORDER BY Nombre DESC");
      		$rs = $con->query($sql) or die ($con->error);
      		
			if($rs->num_rows > 0){
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return($lista);
			} 
		}

		public static function modificaEmail($email, $dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("UPDATE medicos SET Correo = '$email' WHERE DNI = '$dni'");
			$con->query($sql);
		}

		public static function modificaTelefono($tfno, $dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("UPDATE medicos SET Telefono = '$tfno' WHERE DNI = '$dni'");
			$con->query($sql);
		}

		public static function modificaConsulta($consulta, $dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("UPDATE medicos SET Consulta = '$consulta' WHERE DNI = '$dni'");
			$con->query($sql);
		}
	}

?>