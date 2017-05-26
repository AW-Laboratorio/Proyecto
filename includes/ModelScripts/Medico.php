<?php
	namespace estatica\includes\ModelScripts;
	
	class Medico{
		
		private $id;
		private $nombre;
		private $apellidos;
		private $consulta;
		private $dni;
		private $especialidad;
		private $tfno;
		private $email;
		private $numCol;
		

		function __construct($id, $numCol, $nombre, $apellidos, $dni, $consulta, $tfno, $email, $especialidad){
			$this->id=$id;
			$this->numCol=$numCol;
			$this->nombre=$nombre; 
			$this->apellidos=$apellidos;
			$this->dni=$dni;
			$this->consulta=$consulta;
			$this->tfno=$tfno;
			$this->email=$email;			
			$this->especialidad=$especialidad;
		}

		public function getIdMedico(){
			return $this->id;
		}
		public function getNumCol(){
			return $this->numCol;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getApellidos(){
			return $this->apellidos;
		}
		public function getDni(){
			return $this->dni;
		}
		public function getConsulta(){
			return $this->consulta;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getTfno(){
			return $this->tfno;
		}
		public function getEspecialidad(){
			return $this->especialidad;
		}
				
	}
?>