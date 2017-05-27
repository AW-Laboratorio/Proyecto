<?php
	require_once __DIR__.'/includes/config.php';
	/*require_once('includes/ViewScripts/MedicosVista.php');*/
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
			<?php require_once('comun/menuAdministracion.php');?>
			<div class="contenidopestanas">
				
				<div class = "alinearContenido">
					<div class = "admin">
						<div class = "modifica">
						<div>
							
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<!--Pie de las páginas (En todas las páginas)-->
	<?php require_once('comun/pie.php');?>
  </body> 
</html> 