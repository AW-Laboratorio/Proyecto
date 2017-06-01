<?php
	require_once __DIR__.'/includes/config.php';
	/*require_once('includes/ViewScripts/PacientesVista.php');*/
	use \estatica\includes\Aplicacion as App;
	use \estatica\includes\ViewScripts\MedicosVista as MV;
?>

<!DOCTYPE html>
<html>
   <head>
        <title>YourHealth</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
        <link rel="stylesheet" type="text/css" href="css/usuarios.css">
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
	<div class="contenedor">
           <?php 
           	require_once('comun/cabeceraUsuario.php');
           ?>

		<div class = "cuerpo">
          <div class = "contenidoAdmin">
                <?php

                  $app = App::getSingleton();

                  MV::listaMedicos();
                ?>
                <a href = "addMedico.php"><button type = "submit" class="validar">Añadir Médico</button></a>
                <a href = "panelAdministracion.php"><button type = "submit" class="validar">Volver al panel de administración</button></a>
          </div>
          
  		</div>
    <?php include('comun/pie.php');?>
    </div>
  </body> 
</html> 