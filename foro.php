<?php
	require_once __DIR__.'/includes/config.php';
	/*require_once('includes/ViewScripts/ForoVista.php');*/
    use \estatica\includes\Aplicacion as App;
    use \estatica\includes\ViewScripts\ForoVista as FV;

?>
<!DOCTYPE html>
<html>
<head>
	<title>YourHealth</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
	<link rel="stylesheet" type="text/css" href="css/comun.css">
	<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class = "contenedor">

		<?php include('comun/cabecera.php'); ?>

		<div class = "cuerpo">
			<div class = "foro">
				<h1>Foro Your Health: Pregunta y valóranos</h1>
				<h3>Tu opinión nos importa. ¡Compártela!</h3>
				
				<?php 
                	$app = App::getSingleton();
                   // $vista = new ForoVista();
                    //$vista->listaForo();
                    FV::listaForo();
                    
                ?>
                
				<!--<div class="masPags">
					<a href="foro.php"><p><< 1 2 3 Más >></p></a>
				</div>-->
			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>