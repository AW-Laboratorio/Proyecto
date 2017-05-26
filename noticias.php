<?php
    require_once __DIR__.'/includes/config.php';
    /*require_once('includes/ViewScripts/NoticiasVista.php');*/
    use \estatica\includes\Aplicacion as App;
    use \estatica\includes\ViewScripts\NoticiasVista as NV;
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
		
		<?php
			include('comun/cabecera.php');
        ?>
		<div class="cuerpo">
            <div class ="noticiasMenu">
                <h1>Noticias</h1>
            
                <?php

                    
                    $app = App::getSingleton();

                    //$vista = new NoticiasVista();
                    //$vista->listaNoticia();
                    NV::listaNoticia();
                ?>

			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>
