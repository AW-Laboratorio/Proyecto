<?php
	namespace estatica\includes\ModelScripts;
	
	class Usuario{

		private $idUsuario;

		private $dni;

		private $pass;

		private $rol;
	

		public function __construct($idUsuario, $dni, $pass, $rol){
				$this->idUsuario=$idUsuario;
				$this->dni=$dni; 
				$this->pass=$pass;
				$this->rol=$rol;
		}

		public function getIdUsuario(){
			return $this->idUsuario;
		}
		public function getDni(){
			return $this->dni;
		}
		public function getPass(){
			return $this->pass;
		}
		public function getRol(){
			return $this->rol;
		}
	}
?>