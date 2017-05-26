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
			<div class = "valora">
				<h2>Valóra nuestros médicos</h2>
				<div class="imagen">
						<img class="foto" src="img/perfil.png">
				</div>
				<div class="contenidoValora">
					<div class = "especialidad">
						<label class="align">Especialidad: </label>
						<select name="especialidades">
							<option selected value="0"> Elige una opción </option>
							<option value="1">Alergología</option> 
							<option value="2">Anestesiología</option> 
							<option value="3">Cardiología</option>
							<option value="4">Cirugía</option>
							<option value="5">Dermatología</option>
							<option value="6">Diagnóstico por imagen</option> 
							<option value="7">Digestivo</option> 
							<option value="8">Endocrinología</option>
							<option value="9">Ginecología</option> 
							<option value="10">Hematología</option> 
							<option value="11">Medicina Interna</option>
							<option value="12">Nefrología</option>
							<option value="13">Neumología</option> 
							<option value="14">Oftalmología</option>  
							<option value="15">Oncología</option> 
							<option value="16">Otorrinolaringología</option>
							<option value="17">Pediatría</option>
							<option value="18">Psiquiatría</option>
							<option value="19">Radio Diagnóstico</option>
							<option value="20">Rehabilitación/Fisioterapia</option>
							<option value="21">Reumatología</option>
							<option value="22">Traumatología</option>
							<option value="23">Oncología</option>
							<option value="24">Urgencias</option>
							<option value="25">Urología</option>
						</select>
	            	</div>
	            	<div class = "medico">
						<label class="align">Profesión: </label>
						<select name="medico">
							<option selected value="0"> Elige una opción </option>
							<option value="1">Doctor/a</option> 
							<option value="2">Enfermero/a</option>  
						</select>
	            	</div>
	            	<div class = "nombres">
						<label class="align">Profesional: </label>
						<select name="nombres">
							<option selected value="0"> Elige una opción </option>
							<option value="1">Álvaro Gutierrez Sánchez</option> 
							<option value="2">Bárbara Ruíz Fernández</option> 
							<option value="3">Pedro Jiménez Pérez</option>
							<option value="4">Cecilia Hernández Santos</option>
							<option value="5">Luis González Fernández</option>
							<option value="6">Miranda Jiménez Díez</option> 
						</select>
	            	</div>
	            	<div class="puntuacion">
	            		<label class="align">Valoración: </label>
	            		<a href="#">&#9733;</a>
		                <a href="#">&#9733;</a>
		                <a href="#">&#9733;</a>
		                <a href="#">&#9733;</a>
		                <a href="#">&#9733;</a>
	            	</div>
	            	<div class="boton">
	            		<a href="valoraMedicos.php"><button type="button" class="valoraBoton">Valorar</button></a>
	            	</div>	
	            	
				</div>
				
			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>