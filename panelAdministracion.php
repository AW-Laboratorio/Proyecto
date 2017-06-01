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

			<div class="contenidoAdmin">
				<div class = "adminFotos">
					<a href="adminMedicos.php"><img src="img/medicoAdmin.jpg"></a><p>Médico</p>
				</div>

				<div class = "adminFotos">
					<a href="adminPacientes.php"><img src="img/pacienteAdmin.jpg"></a><p>Paciente</p>
				</div>
				<div class = "adminFotos">
					<a href="adminCitas.php"><img src="img/calendarAdmin.jpg"></a><p>Citas</p>
				</div>
				<div class = "adminFotos">
					<a href="adminInformes.php"><img src="img/informeAdmin.jpg"></a><p>Informes</p>
				</div>
				<div class = "adminFotos">
					<a href="adminForo.php"><img src="img/foroAdmin.jpg"></a><p>Foro</p>
				</div>
				<div class = "adminFotos">
					<a href="adminNoticias.php"><img src="img/noticiasadmin.jpg"></a><p>Noticias</p>
				</div>
			</div>
		</div>
	
	<!--Pie de las páginas (En todas las páginas)-->
	<?php require_once('comun/pie.php');?>
  </body> 
</html> 