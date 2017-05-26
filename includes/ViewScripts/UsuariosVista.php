<?php
	
	namespace estatica\includes\ViewScripts;
	use \estatica\includes\ModelScripts\GestorUsuarios as GU;
	
	class UsuariosVista{

		private $ListaUsuarios;
		
		function __construct(){

			/*require_once '/../ModelScripts/GestorUsuarios.php';*/
			//$this->ListaUsuarios = new GestorUsuarios();
			$ListaUsuarios = GU::GestorUsuarios();
		}

		
		
	}

?>