<?php
	namespace estatica\includes\ModelScripts;
	class Paciente{
		
		private $id;
		private $nombre;
		private $apellidos;
		private $sexo;
		private $dni;
		private $fechaN;
		private $tfno;
		private $email;
		private $dir;
		private $numSS;
		

		function __construct($id, $numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo){
			$this->id=$id;
			$this->numSS=$numSS;
			$this->nombre=$nombre; 
			$this->apellidos=$apellidos;
			$this->dir=$dir;
			$this->dni=$dni;
			$this->email=$email;
			$this->tfno=$tfno;
			$this->fechaN=$fechaN;
			$this->sexo=$sexo;		

		}

		public function getIdPaciente(){
			return $this->id;
		}
		public function getNumSS(){
			return $this->numSS;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getApellidos(){
			return $this->apellidos;
		}
		public function getDir(){
			return $this->dir;
		}
		public function getDni(){
			return $this->dni;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getTfno(){
			return $this->tfno;
		}
		public function getFechaN(){
			return $this->fechaN;
		}
		public function getSexo(){
			return $this->sexo;
		}
		
	}
?>