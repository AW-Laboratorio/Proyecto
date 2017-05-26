<?php
	namespace estatica\includes\ModelScripts;

	class Cita{
		
		private $id;
		private $numAfiliado;
		private $numColegiado;
		private $fecha;
		private $hora;
	
		function __construct($id, $numAfiliado, $numColegiado, $fecha, $hora){
			$this->id=$id; 
			$this->numAfiliado=$numAfiliado;
			$this->numColegiado=$numColegiado;
			$this->fecha=$fecha;
			$this->hora=$hora;
		}
		
		public function getId(){
			return $this->id;
		}
		public function getNumAfiliado(){
			return $this->numAfiliado;
		}
		public function getNumColegiado(){
			return $this->numColegiado;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function getHora(){
			return $this->hora;
		}
	}
?>
