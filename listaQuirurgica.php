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
			<div class = "contenido">
				<h1>Lista de espera quirúrgica</h1>
				<p>Nuestro objetivo es ofrecer la mejor atención e información a nuestros pacientes.</p>
				<p>Si usted se encuentra pendiente de una intervención quirúrgica en nuestro centro, podrá consultar en el siguiente enlace los tiempos medios para ser operado en las diferentes especialidades.</p>
				<p><a href="listaEsperaPropia.php">Consulta tiempos medios por especialidad para ser operado</a></p>
				<p>Si usted se encuentra pendiente de una intervención quirúrgica en alguno de nuestros centros adjuntos, podrá consultar en el siguiente enlace los tiempos medios para ser operado.</p>
				<p><a href="listaEsperaOtros.php">Consulta tiempos medios por especialidad para ser operado</a></p>
			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>