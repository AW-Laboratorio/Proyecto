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
			<div class = "busqueda"> <!--Esto iria en un cuadradito-->
				<div class = "textoBuscar">
					<label>Texto a buscar</label>
					<input type="search" name="buscar">
				</div>
				<div class = "nombreTitulo">
					<label>Nombre/Título</label>
					<input type="search" name="nombre">
				</div>
				<div class = "especialidad">
					<label>Especialidad</label>
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
            	 <a href="cuadroMedico.php"><button type="button" class="boton_limpiar">Limpiar</button></a>
            	 <a href="cuadroMedico.php"><button type="button" class="boton_buscar">Buscar</button></a>
			</div>
			<div class = "listaMedicos">
				<ul>
					<h4>Alergología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Anestesiología</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Cardiología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Cirugía</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Dermatología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Diagnóstico por imagen</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Digestivo</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Endocrinología</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Ginecología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Hematología</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Medicina Interna</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Nefrología</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Neumología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Oftalmología</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Oncología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Otorrinolaringología</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Pediatría</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Psiquiatría</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Radio Diagnóstico</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Rehabilitación/Fisioterapia</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Reumatología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Traumatología</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Oncología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
				<ul>
					<h4>Urgencias</h4>
					<li>Cecilia Hernández Santos</li>
					<li>Luis González Fernández</li>
					<li>Miranda Jiménez Díez</li>
				</ul>
				<ul>
					<h4>Urología</h4>
					<li>Álvaro Gutierrez Sánchez</li>
					<li>Bárbara Ruíz Fernández</li>
					<li>Pedro Jiménez Pérez</li>
				</ul>
			</div>
		</div>

		<?php include('comun/pie.php');?>
	</div>
</body>
</html>