<?php

namespace estatica\includes\ViewScripts;

	use \estatica\includes\ModelScripts\GestorCitas as GC;
	use \estatica\includes\ModelScripts\GestorMedicos as GM;
	use \estatica\includes\ModelScripts\GestorPacientes as GP;

	class CitasVista{

		function __construct(){
			/*require_once '/../ModelScripts/GestorCitas.php';*/
			//$this->ListaCitas = new GestorCitas();
			$ListaCitas = GC::GestorCitas();
		}


		public static function listaCitaMedico($dni){
			/*require_once '/../ModelScripts/GestorMedicos.php';
			require_once '/../ModelScripts/GestorPacientes.php';*/
			//$medico = new GestorMedicos();
			//$paciente = new GestorPacientes();

			$numCol = GM::buscaNumColegiado($dni); //$medico->buscaNumColegiado($dni);
			$lista = GC::getListaCitaMedico($numCol); //$this->ListaCitas->getListaCitaMedico($numCol);
    		$iterator = $lista->getIterator();

    		while($iterator->valid()){

            	$id = $iterator->current()->getId();
				$numAfiliado = $iterator->current()->getNumAfiliado();
				$pacienteNombre = GP::buscaPaciente($numAfiliado)->getNombre();//$paciente->buscaPaciente($numAfiliado)->getNombre();
				$pacienteApellidos = GP::buscaPaciente($numAfiliado)->getApellidos();//$paciente->buscaPaciente($numAfiliado)->getApellidos();
				$fecha = $iterator->current()->getFecha();
            	$hora = $iterator->current()->getHora();
            	$html = <<<EOS
	
				<tr>
					<td>$hora</th>
					<td>$pacienteNombre $pacienteApellidos
					<td><a href="historial.php">$numAfiliado</a></td>
	                <td><a href="informe.php"><img class="informe" src="img/informe.png"></a></td>
				</tr>

EOS;
				echo $html;
				$iterator->next();
			}
		}

		public static function listaCitaPaciente($dni){
			/*require_once '/../ModelScripts/GestorMedicos.php';
			require_once '/../ModelScripts/GestorPacientes.php';*/
			//$medico = GM::GestorMedicos(); //new GestorMedicos();
			//$paciente = GP::GestorPacientes(); //new GestorPacientes();

			$numAfiliado = GP::buscaNumAfiliado($dni); //$paciente->buscaNumAfiliado($dni);
			$lista = GC::getListaCitaPaciente($numAfiliado); //$this->ListaCitas->getListaCitaPaciente($numAfiliado);
            $iterator = $lista->getIterator();

            while($iterator->valid()){

            	$id = $iterator->current()->getId();
				$numColegiado = $iterator->current()->getNumColegiado();
				$medicoNombre = GM::buscaMedico($numColegiado)->getNombre();//$medico->buscaMedico($numColegiado)->getNombre(); 
				$medicoApellidos = GM::buscaMedico($numColegiado)->getApellidos();//$medico->buscaMedico($numColegiado)->getApellidos();
            	$fecha = $iterator->current()->getFecha();
            	$hora = $iterator->current()->getHora();
            	$html = <<<EOS

                <div class="cajaCita">
                    <p>Doctor/a $medicoNombre $medicoApellidos</p>
		    		<p>$fecha a las $hora</p>
		    		<a href="pedirCita.php"><button class = "cambio">Cambiar</button></a>
                    <a href="includes/Formularios/formEliminarCita.php?id=$id"><button class = "anular">Anular</button></a>
                </div>				
EOS;
				echo $html;
				$iterator->next();
			}		} 
	}
?>