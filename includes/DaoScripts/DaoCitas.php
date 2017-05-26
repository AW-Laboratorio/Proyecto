<?php
	/*require_once '/../ModelScripts/Cita.php';*/
	namespace estatica\includes\DaoScripts;

	require_once '/../config.php';
	use \estatica\includes\Aplicacion as App;
	use \estatica\includes\ModelScripts\Cita;
	
	class DaoCitas{

		private $array;

		public static function seleccionaCita($id){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM citas WHERE IdCita='$id'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$cita = new Cita($fila['IdCita'], $fila['NumAfiliado'], $fila['NumColegiado'], $fila['Fecha']);
				$rs->free();
				return $cita;
			}
			return false;
		}

		public static function listaCitasPaciente($numAfiliado){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM citas WHERE NumAfiliado= '$numAfiliado' ORDER BY fecha ASC");
			$rs = $con->query($sql) or die ($con->error);
      		
			if($rs->num_rows > 0){
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return($lista);
			} 
		}

		public static function listaCitasMedico($numColegiado){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$hoy=date("Y-m-d");
			$sql =sprintf("SELECT * FROM citas WHERE NumColegiado= '$numColegiado' AND Fecha = '$hoy' ORDER BY Hora ASC");
			$rs = $con->query($sql) or die ($con->error);
      		
			if($rs->num_rows > 0){
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return($lista);
			} 
		}

		public static function insertaCita($numAfilado, $numColegiado, $fecha){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "INSERT INTO pacientes (NumAfiliado, NumColegiado, Fecha) VALUES ('$numAfiliado', '$numColegiado', '$fecha')";
			$rs = $con->query($sql) or die ($con->error);
		}

		public static function eliminaCita($id){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "DELETE FROM citas WHERE IdCita = '$id'";
			$con->query($sql) or die ($con->error);
		}

		public static function existeCita($id){
			$app = App::getSingleton();
            		$con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM citas WHERE IdCita='$id'");
			$rs = $con->query($sql) or die ($con->error);
			$numCol = $rs->num_rows;
			$rs->num_rows;
			return $numCol;
		}
	}
?>
