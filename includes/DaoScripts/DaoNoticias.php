<?php
	/*require_once '/../ModelScripts/Noticia.php';*/
	
	namespace estatica\includes\DaoScripts;

	require_once '/../config.php';
	use \estatica\includes\Aplicacion as App;
	use \estatica\includes\ModelScripts\Noticia;

	class DaoNoticias{

		private $array;

		public static function listaNoticias(){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM noticias ORDER BY fecha DESC");
      		$rs = $con->query($sql) or die ($con->error);
      		
			if($rs->num_rows > 0){
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return($lista);
			} 
		}

		public static function insertaNoticia($titulo, $texto){
			$app = App::getSingleton();
            $con = $app->conexionBd();			
			$sql = "INSERT INTO noticias (titulo, texto) VALUES ( '$titulo', '$texto')";
			$rs = $con->query($sql) or die ($con->error);
		}

		public static function seleccionaNoticia($idNoticia){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM noticias WHERE idNoticia='$idNoticia'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$noticia = new Noticia($fila['idNoticia'], $fila['fecha'], $fila['titulo'], $fila['texto']); 
				$rs->free();
				return $noticia;
			}
			return false;
		}

		public static function borraNoticia($fecha){
			$app = App::getSingleton();
			$con = $app->conexionBd();
            $sql = "DELETE FROM noticias WHERE fecha='$fecha'";
			$con->query($sql) or die ($con->error);
		}

		public static function borraNoticiaId($idNoticia){
			$app = App::getSingleton();
			$con = $app->conexionBd();
            $sql = "DELETE FROM noticias WHERE  idNoticia='$idNoticia'";
			$con->query($sql) or die ($con->error);
		}

		
		public static function cogeUltimaNoticia(){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM noticias WHERE idNoticia = (SELECT max(idNoticia) FROM noticias)");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$noticia = new Noticia($fila['idNoticia'], $fila['fecha'], $fila['titulo'], $fila['texto']); 
				$rs->free();
				return $noticia;
			}
			return false;
		}

		


	}
?>