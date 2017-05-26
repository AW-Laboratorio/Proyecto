<?php
	/*require_once '/../ModelScripts/Foro.php';*/
	
	namespace estatica\includes\DaoScripts;

	require_once '/../config.php';
	use \estatica\includes\Aplicacion as App;
	use \estatica\includes\ModelScripts\Foro;

	class DaoForo{

		private $array;
        
        public static function listaForo(){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM foro ORDER BY IdForo DESC");
      		$rs = $con->query($sql) or die ($con->error);
      		
			if($rs->num_rows > 0){
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return($lista);
			} 
		}
        
        public static function insertaForo($Nombre, $Tema, $UltParticipante, $Creador){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "INSERT INTO foro (Nombre, Tema, UltParticipante, Creador) VALUES ($Nombre, $Tema, $UltParticipante, $Creador)";
			$rs = $con->query($sql) or die ($con->error);
		}

		public static function seleccionaForo($IdForo){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM foro WHERE DNI='$IdForo'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$foro = new Foro($fila['IdForo'], $fila['Nombre'], $fila['Tema'], $fila['UltParticipante'], $fila['Creador']);
				$rs->free();
				return $foro;
			}
			return false;
		}

		public static function borrarForo($IdForo){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "DELETE FROM foro WHERE IdForo = '$IdForo'";
			$con->query($sql) or die ($con->error);
		}

		public static function existeForo($IdForo, $Nombre){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM foro WHERE nombre='%s' OR IdForo='%s'", $con->real_escape_string($Nombre), $con->real_escape_string($IdForo));
			$rs = $con->query($sql) or die ($con->error);
			$numCol = $rs->num_rows;
			$rs->num_rows;
			return $numCol;
		}

		public static function modificarForo($IdForo, $Nombre, $Tema, $UltParticipante, $Creador){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql="UPDATE foro SET Nombre='$Nombre', Tema='$Tema', Participante='$UltParticipante', Creador='$Creador' WHERE IdForo='$IdForo'";
			$con->query($sql);
		}

		public static function buscaNombreForo($IdForo){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM foro WHERE ID='$IdForo'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$foro = $fila['Nombre'];
				$rs->free();
				return $foro;
			}
			return false;
			
		}
        
        public static function cogeUltimoForo(){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM foro WHERE IdForo = (SELECT max(IdForo) FROM foro)");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$noticia = new Noticia($fila['IdForo'], $fila['Nombre'], $fila['Tema'], $fila['Ultparticipante'], $fila['Creador']); 
				$rs->free();
				return $foro;
			}
			return false;
		}
	}

?>