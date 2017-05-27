<?php
	
	namespace estatica\includes\ViewScripts;
	use \estatica\includes\ModelScripts\GestorMedicos as GM;
	//use \estatica\includes\ModelScripts\Medico;
	
	class MedicosVista{

		private $ListaMedicos;
		
		function __construct(){

			/*require_once '/../ModelScripts/GestorMedicos.php';*/
			//$this->ListaMedicos = new GestorMedicos;
			$ListaMedicos = GM::GestorMedicos();
		}


		public static function perfilMedico($DNI){
			//$datosMedico = $ListaMedicos->getMedico($DNI);
			$datosMedico = GM::getMedico($DNI);
			$id = $datosMedico->getIdMedico();
			$nombre = $datosMedico->getNombre();
			$apellidos = $datosMedico->getApellidos();
			$especialidad = $datosMedico->getEspecialidad();
			$consulta = $datosMedico->getConsulta();
			$tfno = $datosMedico->getTfno();
			$email = $datosMedico->getEmail();
			$numCol = $datosMedico->getNumCol();
			$dni = $datosMedico->getDni();
			$html = <<<EOS

				<div class = "alinearContenido">
					<div class = "datosP1">
						<form action="includes/Formularios/formModificaDatosM.php" method="post">
							<h1>Tus datos</h1>
							<div class="datos">Nombre: $nombre</div>
							<div class="datos">Apellidos: $apellidos</div>
							<div class="datos">Especialidad: $especialidad</div>
							<div class="datos">Consulta: $consulta</div>
							<div class="datos">Teléfono: $tfno</div>
							<div class="datos">Correo electrónico: $email</div>
							<div class="datos">Número colegiado: $numCol</div>
							<div class="datos">DNI/Pasaporte: $DNI</div>		
						</form>
					</div>
				</div>
EOS;
			echo $html;
		}

	public static function listaMedicos(){
            $lista = GM::getListaMedico();
            $iterator = $lista->getIterator();

            while($iterator->valid()){

			$id = $iterator->current()->getIdMedico();
			$nombre = $iterator->current()->getNombre();
			$apellidos = $iterator->current()->getApellidos();
			$numCol = $iterator->current()->getNumCol();
			$html = <<<EOS

				<div class = "alinearContenido">
					<div class = "datosP1">
					<h1>Médico/a</h1>
						<form action="includes/Formularios/formModificaDatosM.php" method="post">
							<div class="datos">Nombre: $nombre</div>
							<div class="datos">Apellidos: $apellidos</div>
							<div class="datos">Número colegiado: $numCol</div>		
						</form>
					</div>
				</div>
EOS;
			echo $html;
			$iterator->next();
		}

		}
	}

?>