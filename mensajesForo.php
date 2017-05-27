<?php
	require_once __DIR__.'/includes/config.php';
	
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
			<?php 
				$idforo = $_REQUEST['data'];
				$tema = $_REQUEST['tema'];

				echo '<h1>' . $tema . '</h1>';
				
				$app = App::getSingleton();
                FV::listaMensajesForo($idforo, $tema);
                    
        
			?>
				
				
				
				<div class="addComent">
					<a href="nuevoComentario.php?data=<?php echo $idforo;?>&tema=<?php echo $tema;?>"><button class = "add">Añade un comentario</button></a>
				</div>
			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>