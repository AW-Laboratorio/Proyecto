<?php
	
	namespace estatica\includes\ModelScripts;
	class Foro{
		
		private $IdForo;
		private $Nombre;
		private $Tema;
		private $UltParticipante;
		private $Creador;

		function __construct($IdForo, $Nombre, $Tema, $UltParticipante, $Creador){
			$this->IdForo=$IdForo;
			$this->Nombre=$Nombre;
			$this->Tema=$Tema; 
			$this->UltParticipante=$UltParticipante;
			$this->Creador=$Creador;		

		}

		public function getIdForo(){
			return $this->IdForo;
		}
		public function getNombre(){
			return $this->Nombre;
		}
		public function getTema(){
			return $this->Tema;
		}
		public function getUltParticipante(){
			return $this->UltParticipante;
		}
		public function getCreador(){
			return $this->Creador;
		}
		
	}
?>