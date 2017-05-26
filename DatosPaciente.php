<?php
	require_once __DIR__.'/includes/config.php';
	/*require_once('includes/ViewScripts/PacientesVista.php');*/
	use \estatica\includes\Aplicacion as App;
	use \estatica\includes\ViewScripts\PacientesVista as PV;
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
			<?php require_once('comun/menuPaciente.php');?>
			<div class="contenidopestanas">
				<?php

					
					$app = App::getSingleton();
					if ($app->usuarioLogueado()){
						//$vista = new PacientesVista();
						$dni= $_SESSION['DNI'];
						$ps = $_SESSION['pass'];
						//$vista->perfilPaciente($dni);
						PV::perfilPaciente($dni);
						@$cambio = $_REQUEST['ok'];
		    			if($cambio == 'true'){
				    		echo "<script language='JavaScript'>alert('La contraseña se ha modificado con éxito.');</script>"; 
				    	}elseif ($cambio == 'false') {
				    		echo "<script language='JavaScript'>alert('La contraseña se ha modificado con éxito.');</script>"; 
				    	}
					}
				?>
				<div class = "alinearContenido">
					<div class = "datosP">
						<div class = "modifica">
						<div>
							<form action="includes/Formularios/formModificaTfno.php" method="post">
								<fieldset>
								<legend>Modificar Teléfono</legend>
								<label for="Telefono" class="align">Nuevo teléfono :</label>
						    	<input type="text" id="Telefono" name="Telefono" placeholder="Introducir nuevo teléfono" minlength="9" maxlength="9" required/>
						    	<button class="modif">Modificar</button>
						    	</fieldset>
							</form>
						</div>
						</div>
						<div class = "modifica">
						<div>
							<form action="includes/Formularios/formModificaEmail.php" method="post">
							
								<fieldset>
								<legend>Modificar Correo</legend>
								<label for="Email" class="align">Nuevo correo :</label>
						    	<input type="email" id="Email" name="Email" placeholder="Introducir nuevo email" required/>
						    	<img id="emailNO" src="img/no.png" hidden="true">
								<img id="emailOk" src="img/ok.png" hidden="true">
						    	<button class="modif_datos">Modificar</button>
						    	</fieldset>
							</form>
						</div>
						</div>
						<div class = "modifica">
						<div>
							<form action="includes/Formularios/formModificaDireccion.php" method="post">
								<fieldset>
								<legend>Modificar Dirección</legend>
								<label for="Direccion" class="align">Nueva dirección :</label>
						    	<input type="text" id="Direccion" name="Direccion" placeholder="Introducir nueva dirección" required/>
							    <button class="modif_datos">Modificar</button>
							    </fieldset>
							</form>
						</div>
						</div>
						<div class = "modifica">
						<div>
							<form  action="includes/Formularios/formModificaPass.php" method="post">
								<fieldset>
								<legend>Modificar Contraseña</legend>
								<div>
								<label for="Pass" class="align">Contraseña antigua:</label>
						    	<input type="password" id="Pass" name="Pass" placeholder="Introducir contraseña" minlength="6" pattern="[A-Za-z0-9@#$%]{6,20}" title="Una contraseña válida es una cadena con una longitud entre 6 y 20 caracteres, donde cada uno consiste en una letra mayúscula o minúscula, un dígito, o los símboloss '@', '#', '$' y '%'" required/>
						    	<img id="passNO" src="img/no.png" hidden="true">
								<img id="passOk" src="img/ok.png" hidden="true">
						    	</div><div>
						    	<label for="Pass" class="align">Nueva contraseña :</label>
						    	<input  type="password" id="PassN1" name="PassN1" placeholder="Introducir nueva contraseña" minlength="6" pattern="[A-Za-z0-9@#$%]{6,20}" title="Una contraseña válida es una cadena con una longitud entre 6 y 20 caracteres, donde cada uno consiste en una letra mayúscula o minúscula, un dígito, o los símboloss '@', '#', '$' y '%'" required/>
						    	</div><div>
						    	<label for="Pass" class="align">Repetir contraseña :</label>
						    	<input type="password" id="PassN2" name="PassN2" placeholder="Introducir nueva contraseña" minlength="6" pattern="[A-Za-z0-9@#$%]{6,20}" title="Una contraseña válida es una cadena con una longitud entre 6 y 20 caracteres, donde cada uno consiste en una letra mayúscula o minúscula, un dígito, o los símboloss '@', '#', '$' y '%'" required/>
						    	<img id="passIgualesNO" src="img/no.png" hidden="true">
								<img id="passIgualesOk" src="img/ok.png" hidden="true">
						    	</div>
						    	<input type="password" id="PassBd" name="PassBd" value="<?php echo $ps;?>" hidden>
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
	<!--Pie de las páginas (En todas las páginas)-->
	<?php require_once('comun/pie.php');?>

		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
			
			document.getElementById("Pass").addEventListener('input', function(){
				
				campo = event.target;
				pBd = document.getElementById("PassBd").value;
				
				if(pBd == campo.value){
					$('#passNO').hide();
					$('#passOk').show();
				}else{
					$('#passNO').show();
					$('#passOk').hide();
				}
			});

			document.getElementById("PassN2").addEventListener('input', function(){
				
				campo = event.target;
				p1 = document.getElementById("PassN1").value;
				
				if(p1 == campo.value){
					$('#passIgualesNO').hide();
					$('#passIgualesOk').show();
				}else{
					$('#passIgualesNO').show();
					$('#passIgualesOk').hide();
				}
			});

			document.getElementById('Email').addEventListener('input', function() {
			    campo = event.target;
			    			        
			    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
			    
			    if (emailRegex.test(campo.value)) {
			      	$('#emailNO').hide();
					$('#emailOk').show();
			    } else {
				    $('#emailNO').show();
					$('#emailOk').hide();
			    }
			});

		</script>
  </body> 
</html> 