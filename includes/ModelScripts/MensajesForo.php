<?php
	
	namespace estatica\includes\ModelScripts;
	
	class Mensaje{
		
		private $IdMensaje;
		private $IdForo;		
		private $Usuario;
		private $Mensaje;
		private $Fecha;

		function __construct($idmensaje, $idforo, $usuario, $mensaje, $fecha){
			$this->IdMensaje=$idmensaje;
			$this->IdForo = $idforo;
			$this->Usuario = $usuario;
			$this->Mensaje = $mensaje;
			$this->Fecha = $fecha;
		}

		public function getIdForo(){
			return $this->IdForo;
		}
		public function getIdMensaje(){
			return $this->IdMensaje;
		}
		public function getUsuario(){
			return $this->Usuario;
		}
		public function getMensaje(){
			return $this->Mensaje;
		}
		public function getFecha(){
			return $this->Fecha;
		}
		
	}
?>