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
				<form action="includes/Formularios/formInsertaMensaje.php" method="post">
					<div class="cajaCont">
						<div>
							<label>Nombre a mostrar: </label>
					    	<input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre"/>
					    	<p>* Si no escribe un nombre se publicará como Anónimo</p>
						</div>
						<div>
							<label>Comentario: </label>
					    	<textarea name="msj" id="msj" placeholder="Escribe tu comentario aqui.." required></textarea>
						</div>
					</div>
					<div class="boton_enviar">
						<?php $idforo = $_REQUEST['data']; $tema=$_REQUEST['tema'];?>
						<input type="text" id="foro" name="foro" value="<?php echo $idforo;?>" hidden/>
						<input type="text" id="tema" name="tema" value="<?php echo $tema;?>" hidden/>
						<button type= "submit" class = "add">Añadir comentario</button>
					</div>
				</form>
			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>