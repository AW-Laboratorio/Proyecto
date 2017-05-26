<?php
	namespace estatica\includes\ModelScripts;
	
	class MensajesForo{
		
		private $IdInforme;
		private $Usuario;
		private $Mensaje;
        private $Fecha;
		

		function __construct($IdInforme, $Usuario, $Mensaje, $Fecha){
			
			$this->IdInforme=$IdInforme;
			$this->Usuario=$Usuario;
			$this->Mensaje=$Mensaje;
			$this->Fecha=$Fecha;		

		}

		public function getIdIforme(){
			return $this->IdInforme;
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