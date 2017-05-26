<?php
	
	/*require_once '/../DaoScripts/DaoNoticias.php';*/
	namespace estatica\includes\ModelScripts;
	use \estatica\includes\DaoScripts\DaoNoticias as DN;
	use ArrayObject;

	class GestorNoticias{

		private $dao;

		function __construct(){
			$this->dao = DN::DaoNoticias();//new DaoNoticias();
			if(!isset($_SESSION)) session_start();
		}

		public static function getNoticia($idNoticia){
			$idNoticiaN = htmlspecialchars(trim(strip_tags($idNoticia)));
			return (DN::seleccionaNoticia($idNoticiaN));
		}

    	public static function insertarNoticia($titulo, $texto){
          $tituloN = htmlspecialchars(trim(strip_tags($titulo)));
	      $textoN = htmlspecialchars(trim(strip_tags($texto)));

		    DN::insertaNoticia($tituloN, $textoN);
		     
      	}

      	public static function borrarNoticia($fecha){
      		$fechaN = htmlspecialchars(trim(strip_tags($fecha)));

      		 DN::borraNoticia($fechaN);

      	}

      	public static function getListaNoticia(){
      	  $lista = DN::listaNoticias();
	      $array = new ArrayObject();
	      for($i= 0; $i <sizeof($lista)-1 ; $i++){
	     	 $array->append(new Noticia($lista[$i]['idNoticia'], $lista[$i]['fecha'],$lista[$i]['titulo'], $lista[$i]['texto']));
	  	  }
	      return $array;

      	}

      	public static function getUltimaNoticia(){
      		 return (DN::cogeUltimaNoticia());
      	}
      	
	}

?>