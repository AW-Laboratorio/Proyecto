<?php
	
	namespace estatica\includes\ViewScripts;
	use \estatica\includes\ModelScripts\GestorPacientes as GP;
	
	class PacientesVista{

		private $ListaPacientes;
		
		function __construct(){

			/*require_once '/../ModelScripts/GestorPacientes.php';*/
			//$this->ListaPacientes = new GestorPacientes();
			$ListaPacientes = GP::GestorPacientes();
		}


		public static function perfilPaciente($DNI){
			$datosPaciente = GP::getPaciente($DNI);//$this->ListaPacientes->getPaciente($DNI);
			$id = $datosPaciente->getIdPaciente();
			$nombre = $datosPaciente->getNombre();
			$apellidos = $datosPaciente->getApellidos();
			$sexo = $datosPaciente->getSexo();
			$fechaN = $datosPaciente->getFechaN();
			$tfno = $datosPaciente->getTfno();
			$email = $datosPaciente->getEmail();
			$dir = $datosPaciente->getDir();
			$numSS = $datosPaciente->getNumSS();
			$dni = $datosPaciente->getDni();
			$html = <<<EOS
				
				<div class = "alinearContenido">
					<div class = "datosP1">
						<form action="includes/Formularios/formDarBaja.php" method="post">
							<h1>Tus datos</h1>
							<div class="datos">Nombre: $nombre</div>
							<div class="datos">Apellidos: $apellidos</div>
							<div class="datos">Sexo: $sexo</div>
							<div class="datos">Fecha nacimiento: $fechaN</div>
							<div class="datos">Teléfono: $tfno  </div>
							<div class="datos">Correo electrónico: $email</div>
							<div class="datos">Dirección: $dir</div>
							<div class="datos">Número seguro social: $numSS</div>
							<div class="datos">DNI/Pasaporte: $DNI</div>
							<input type="text" value="$dni" name="dni"/>
							<button class="modif_datos">Baja como usuario</button>
							<p>*Darse de baja como usuario no implica darse de baja como paciente</p>
						</form>
					</div>
				</div>
				
				
EOS;
			echo $html;
		}

		public static function listaPacientes(){
            $lista = GP::getListaPaciente();
            $iterator = $lista->getIterator();

            while($iterator->valid()){

			$id = $iterator->current()->getIdPaciente();
			$nombre = $iterator->current()->getNombre();
			$apellidos = $iterator->current()->getApellidos();
			$html = <<<EOS

				<div class = "alinearContenido">
					<div class = "datosP1">
						<div class = "cajaCita">
							<h1>Paciente</h1>
								
							<div class="datos">Nombre: $nombre</div>
							<div class="datos">Apellidos: $apellidos</div>
							<a href = "includes/Formularios/formModificaPaciente.php?data=$id"><button type = "submit" class="cambio">Modificar</button></a>
							<a href = "includes/Formularios/formDarBaja.php?data=$id"><button type = "submit" class="anular">Eliminar</button></a>
						</div>
					</div>
				</div>
EOS;
			echo $html;
			$iterator->next();
		}

		}
		
	}

?>