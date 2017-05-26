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
				<h1>Escribe tu comentario</h1>
				<div class="cajaCont">
					<div>
						<label>Nombre a mostrar: </label>
				    	<input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre"/>
					</div>
					<div>
						<label>Comentario: </label>
				    	<textarea name="msj" id="msj" placeholder="Escribe tu comentario aqui.."></textarea>
					</div>
				</div>
				<div class="boton_enviar">
					<a href="MensajesForo.php"><button class = "add">Añadir comentario</button></a>
				</div>
			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>