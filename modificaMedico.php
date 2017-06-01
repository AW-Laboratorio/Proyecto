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
            $app = App::getSingleton();
            if ($app->usuarioLogueado() && $app->tieneRol('Admin')){
           ?>

		<div class = "cuerpo">
          <div class = "contenidoAdmin">
            <?php
              
              $dni = isset($_GET['data']) ? $_GET['data']:null;
              MV::perfilMedico($dni);
              
               
        ?>
        <div class = "alinearContenido">
          <div class = "datosP">
            <div class = "modifica">
            <div>
            <div class = "modifica">
            <div>
              <form action="includes/Formularios/formModificaTelefonoM.php" method="post">
                <fieldset>
                <legend>Modificar Teléfono</legend>
                <label for="Telefono" class="align">Nuevo teléfono :</label>
                  <input type="text" id="Telefono" name="Telefono" placeholder="Introducir nuevo teléfono" minlength="9" maxlength="9" required/>
                  <input type="text" id="dni" name="dni" value="<?php echo $dni;?>" hidden/>
                  <button class="modif">Modificar</button>
                  </fieldset>
              </form>
            </div>
            </div>
            <div class = "modifica">
            <div>
              <form action="includes/Formularios/formModificaEmailM.php" method="post">
              
                <fieldset>
                <legend>Modificar Correo</legend>
                <label for="Email" class="align">Nuevo correo :</label>
                  <input type="email" id="Email" name="Email" placeholder="Introducir nuevo email" required/>
                  <input type="text" id="dni" name="dni" value="<?php echo $dni;?>" hidden/>
                  <button class="modif_datos">Modificar</button>
                  </fieldset>
              </form>
            </div>
            </div>
            <div class = "modifica">
            <div>
              <form action="includes/Formularios/formModificaConsulta.php" method="post">
                <fieldset>
                <legend>Modificar Teléfono</legend>
                <label for="consulta" class="align">Nuevo consulta :</label>
                  <input type="text" id="consulta" name="consulta" placeholder="Introducir nueva consulta" minlength="1" maxlength="2" required/>
                  <input type="text" id="dni" name="dni" value="<?php echo $dni;?>" hidden/>
                  <button class="modif">Modificar</button>
                  </fieldset>
              </form>
            </div>
            </div>
            <div class = "modifica">
            <div>
              <form  action="includes/Formularios/formModificaPassM.php" method="post">
                <fieldset>
                <legend>Modificar Contraseña</legend>
                <div>
                  <label for="Pass" class="align">Nueva contraseña :</label>
                  <input  type="password" id="PassN1" name="PassN1" placeholder="Introducir nueva contraseña" minlength="6" pattern="[A-Za-z0-9@#$%]{6,20}" title="Una contraseña válida es una cadena con una longitud entre 6 y 20 caracteres, donde cada uno consiste en una letra mayúscula o minúscula, un dígito, o los símboloss '@', '#', '$' y '%'" required/>
                  </div>
                  <input type="text" id="dni" name="dni" value="<?php echo $dni;?>" hidden/>
                  <button class="modif_datos">Modificar</button>
                  </fieldset>
              </form>
            </div>
            </div>
          </div>
        </div>
          </div>
          
  		</div>
      </div>
      </div>
    <?php } include('comun/pie.php');?>
    </div>
  </body> 
</html> 