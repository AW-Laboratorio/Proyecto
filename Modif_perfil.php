<!DOCTYPE html>
<html>
<head>
	<title>Perfil Paciente</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
        <link rel="stylesheet" type="text/css" href="css/usuarios.css">
        <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
	
	<div class="contenedor">
           <?php include('comun/cabeceraUsuario.php');?>
	    <div class="cuerpo">
	    	<div class="cuadro">
				<h1> Modifica tus datos </h1>

				<form method="post" action="traitement.php">
			
					<div>
						<label for="nombre" class="align">Nombre :</label>
						<input type="text" id="nombre" name="nombre" placeholder="Laura" required/>
					</div>

					<div>
						<label for="apellido" class="align">Apellido :</label>	
						<input type="text" id="apellido" name="apellido" placeholder="Rodríguez Motos" required/>
					</div>

					<div>
						<label for="sexo_H" class="align">Sexo : </label>
						<input type="radio" id="sexo_H" name="sexo" value="sexo_H" /> <label for="sexo_H">H</label>
						<input type="radio" id="sexo_M" name="sexo" value="sexo_M" id="sexo_H" /> <label for="sexo_M">M</label>
					</div>

					<div>
						<label for="dni" class="align">DNI : </label>
						<input type="text" id="dni" name"dni" required/>
					</div>

					<div>
						<label for="fecha_nacimiento" class="align">Fecha nacimiento :</label>
						<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required/>
					</div>
			 
					<div>
						<label for="telefono" class="align">Teléfono :</label>
						<input type="tel" id="telefono" name="telefono" required/>
					</div>

					<div>
						<label for="email_addr" class="align">Correo electrónico :</label>
						<input type="email" id="email_addr" name="email_addr" required/>
					</div>

					<div>
						<label for="direccion" class="align">Dirección :</label>
						<input type="text" id="direccion" name="direccion" required/>
					</div>

					<div>
						<label for="num_seg_social" class="align">Número de afiliado :</label>
						<input type="text" id="num_seg_social" name="num_seg_social" required/>
					</div>

					<div>
						<label for="nombre_usuario" class="align">Nombre de usuario:</label>
						<input type="text" id="nombre_usuario" name="nombre_usuario" required/>
					</div>
			 
					<div>
						<label for="contraseña" class="align">Contraseña:</label>
						<input type="password" id="contraseña" name="contraseña" required/>
					</div>

					<div><label for="foto" class="align">Foto:</label>
					<input type="file" id="foto" name="foto" required/>
					</div>
					
					<input type="submit" value="Validar modificación" class="validar" onclick="window.location.href='confirmacion_modif.php';"/>
				</form>
	 		</div>			
	    </div>

	    <?php include('comun/pie.php');?>
	</div>
</body>
</html>