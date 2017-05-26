<?php
	namespace estatica\includes\ModelScripts;
	class Noticia{

		private $idNoticia;
		private $fecha;
		private $titulo;
		private $texto;
	

		function __construct($idNoticia, $fecha, $titulo, $texto){
				$this->idNoticia=$idNoticia;
				$this->fecha=$fecha; 
				$this->titulo=$titulo;
				$this->texto=$texto;
		}

		public function getIdNoticia(){
			return $this->idNoticia;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function getTexto(){
			return $this->texto;
		}
	}
?>