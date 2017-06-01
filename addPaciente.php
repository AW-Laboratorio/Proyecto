<?php
	require_once __DIR__.'/includes/config.php';
	/*require_once('includes/ViewScripts/PacientesVista.php');*/
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
          <div class = "contenidoAdmin">
                <form action="includes/Formularios/formAddPaciente.php" method="post">
        
          <div>
              <label for="nombre" class="align">* Nombre :</label>
              <input type="text" id="nombre" name="nombre" placeholder="Introducir Nombre" required/>
          </div>

          <div>
              <label for="apellido" class="align">* Apellidos :</label> 
              <input type="text" id="apellido" name="apellido" placeholder="Introducir Apellidos" required/>
          </div>

          <div>
              <label for="sexo" class="align">* Sexo : </label>
              <input type="radio" id="sexo_H" name="sexo" value="Hombre" /> <label for="sexo_H">Hombre</label>
              <input type="radio" id="sexo_M" name="sexo" value="Mujer" id="sexo_H" /> <label for="sexo_M">Mujer</label>
          </div>

          <div>
              <label for="dni" class="align">* DNI : </label>
              <input type="text" id="dni" name = "dni" placeholder="Introducir DNI" minlength="9"  maxlength="9" required/>
              <img id="dniNO" src="img/no.png" hidden="true">
            <img id="dniOk" src="img/ok.png" hidden="true">
          </div>

          <div>
              <label for="fecha_nacimiento" class="align">* Fecha nacimiento :</label>
              <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required/>
          </div>
       
          <div>
              <label for="telefono" class="align">* Teléfono :</label>
              <input type="tel" id="telefono" name="telefono" placeholder="Introducir Teléfono"  minlength="9"  maxlength="9" required/>
          </div>

          <div>
              <label for="email_addr" class="align">* Correo electrónico :</label>
              <input type="email" id="email" name="email" placeholder="Introducir Correo" required/>
              <img id="emailNO" src="img/no.png" hidden="true">
            <img id="emailOk" src="img/ok.png" hidden="true">
          </div>

          <div>
              <label for="direccion" class="align">* Dirección :</label>
              <input type="text" id="direccion" name="direccion" placeholder="Introducir Dirección" required/>
          </div>
          
          <div>
              <label for="num_seg_social" class="align">* Número de afiliado :</label>
              <input type="text" id="num_seg_social" name="num_seg_social" placeholder="Introducir Número Afiliado" minlength="10"  maxlength="10" required/>
          </div>

          <div>
              <label for="pass" class="align">* Contraseña:</label>
              <input type="password" id="pass" name="pass" placeholder="Introducir Contraseña" minlength="6" pattern="[A-Za-z0-9@#$%]{6,20}" title="Una contraseña válida es una cadena con una longitud entre 6 y 20 caracteres, donde cada uno consiste en una letra mayúscula o minúscula, un dígito, o los símboloss '@', '#', '$' y '%'" required/>
              <p>(*) La contraseña debe tener al menos 6 caracteres.</p>
          </div>
          <button type="submit" class="validar"">Añadir Paciente</button>
          </form>
          </div>
          
  		</div>
    <?php include('comun/pie.php');?>
    </div>
  </body> 
</html> 