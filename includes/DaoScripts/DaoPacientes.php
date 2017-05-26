<?php
	/*require_once '/../ModelScripts/Paciente.php';*/
	
	namespace estatica\includes\DaoScripts;

	require_once '/../config.php';
	use \estatica\includes\Aplicacion as App;
	use \estatica\includes\ModelScripts\Paciente;

	class DaoPacientes{

		private $array;

		public static function seleccionaPaciente($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM pacientes WHERE DNI='$dni'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$paciente = new Paciente($fila['IdPaciente'], $fila['NumAfiliado'], $fila['Nombre'], $fila['Apellidos'], $fila['Direccion'], $fila['DNI'], $fila['Correo'], $fila['Telefono'],$fila['FechaNac'], $fila['Sexo']);
				$rs->free();
				return $paciente;
			}
			return false;
		}

		public static function insertaPaciente($numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "INSERT INTO pacientes (NumAfiliado, Nombre, Apellidos, Direccion, DNI, Correo, Telefono, FechaNac, Sexo) VALUES ('$numSS', '$nombre', '$apellidos', '$dir', '$dni', '$email', '$tfno', '$fechaN', '$sexo')";
			$rs = $con->query($sql) or die ($con->error);
		}

		public static function eliminaPaciente($dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "DELETE * FROM pacientes WHERE DNI = '$dni'";
			$con->query($sql) or die ($con->error);
		}

		public static function existePaciente($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM pacientes WHERE DNI='$dni'");
			$rs = $con->query($sql) or die ($con->error);
			$numCol = $rs->num_rows;
			$rs->num_rows;
			return $numCol;
		}

		public static function modificarPerfil($nombre, $apellidos, $dir, $dni, $email, $tfno){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql="UPDATE paciente SET Nombre='$nombre', Apellidos='$apellidos', Direccion='dir', Correo='$email', Telefono='$tfno' WHERE DNI='$dni'";
			$con->query($sql);
		}

		public static function buscaNombrePaciente($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM pacientes WHERE DNI='$dni'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$paciente = $fila['Nombre'];
				$rs->free();
				return $paciente;
			}
			return false;
			
		}

		public static function buscaSexoPaciente($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM pacientes WHERE DNI='$dni'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$paciente = $fila['Sexo'];
				$rs->free();
				return $paciente;
			}
			return false;
			
		}

		public static function modificaDireccion($dir, $dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("UPDATE pacientes SET Direccion = '$dir' WHERE DNI = '$dni'");
			$con->query($sql);
		}

		public static function modificaEmail($email, $dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("UPDATE pacientes SET Correo = '$email' WHERE DNI = '$dni'");
			$con->query($sql);
		}

		public static function modificaTelefono($tfno, $dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("UPDATE pacientes SET Telefono = '$tfno' WHERE DNI = '$dni'");
			$con->query($sql);
		}

		public static function buscaNumAfiliado($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM pacientes WHERE DNI='$dni'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$paciente = $fila['NumAfiliado'];
				$rs->free();
				return $paciente;
			}
			return false;
		}

		public static function buscaPaciente($numA){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM pacientes WHERE NumAfiliado='$numA'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$paciente = new Paciente($fila['IdPaciente'], $fila['NumAfiliado'], $fila['Nombre'], $fila['Apellidos'], $fila['Direccion'], $fila['DNI'], $fila['Correo'], $fila['Telefono'],$fila['FechaNac'], $fila['Sexo']);
				$rs->free();
				return $paciente;
			}
			return false;
		}

		public static function existeNumAfiliado($numA){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM pacientes WHERE NumAfiliado='$numA'");
			$rs = $con->query($sql) or die ($con->error);
			$numCol = $rs->num_rows;
			$rs->num_rows;
			return $numCol;
		}

		public static function existeEmail($email){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM pacientes WHERE Correo='$email'");
			$rs = $con->query($sql) or die ($con->error);
			$numCol = $rs->num_rows;
			$rs->num_rows;
			return $numCol;
		}
	}

?>