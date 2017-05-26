<?php
	require_once __DIR__.'/includes/config.php';
	use \estatica\includes\Aplicacion as App;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Registro</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
        <link rel="stylesheet" type="text/css" href="css/comun.css">
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body> 
	
	<div class="contenedor">

        <?php include('comun/cabecera.php'); ?>
			
	    <div class="cuerpo">

	    	<?php
		    	$app = App::getSingleton();
		    	//if(!$app->usuarioLogueado()){
		    	@$dniBien = $_REQUEST['dniOk'];
		    	if($dniBien == 'false'){
		    		echo "<script language='JavaScript'>alert('El DNI introducido ya está registrado.');</script>"; 
		    	}

		    	@$numSSBien = $_REQUEST['numSSOk'];
		    	if($numSSBien == 'false'){
		    		echo "<script language='JavaScript'>alert('El número de afiliado introducido ya está registrado.');</script>"; 
		    	}

		    	@$emailBien = $_REQUEST['emailOk'];
		    	if($emailBien == 'false'){
		    		echo "<script language='JavaScript'>alert('El correo electrónico introducido ya está registrado.');</script>"; 
		    	}
		     ?>

	    		<div class = "cuerpoRegistro">
					<h1> REGISTRO </h1>

					<form action="includes/Formularios/formRegistro.php" method="post">
				
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
					
					<div>
					    <label for="repcontraseña" class="align">* Repetir Contraseña:</label>
					    <input type="password" id="repcontraseña" name="repcontraseña" placeholder="Repetir Contraseña" minlength="6" pattern="[A-Za-z0-9@#$%]{6,20}" title="Una contraseña válida es una cadena con una longitud entre 6 y 20 caracteres, donde cada uno consiste en una letra mayúscula o minúscula, un dígito, o los símboloss '@', '#', '$' y '%'" required/>
					    <img id="passIgualesNO" src="img/no.png" hidden="true">
						<img id="passIgualesOk" src="img/ok.png" hidden="true">
						<p>(**) Los campos con * son obligatorios. </p>
					</div>
					<button type="submit" class="validar"">Registrar</button>
					</form>
					
			    </div>
		 </div>
		
		<?php include('comun/pie.php');?>
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
			
			document.getElementById("repcontraseña").addEventListener('input', function(){
				
				campo = event.target;
				p = document.getElementById("pass").value;
				
				if(p == campo.value){
					$('#passIgualesNO').hide();
					$('#passIgualesOk').show();
				}else{
					$('#passIgualesNO').show();
					$('#passIgualesOk').hide();
				}
			});

			document.getElementById('email').addEventListener('input', function() {
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

			document.getElementById('dni').addEventListener('input', function() {
			    campo = event.target;

				expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;
			 
				dni = campo.value.toUpperCase();
			 
				if(expresion_regular_dni.test(dni) === true){
					numero = dni.substr(0,dni.length-1);
					numero = numero.replace('X', 0);
					numero = numero.replace('Y', 1);
					numero = numero.replace('Z', 2);
					letr = dni.substr(dni.length-1, 1);
					numero = numero % 23;
					letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
					letra = letra.substring(numero, numero+1);
					if (letra != letr) {
						//alert('Dni erroneo, la letra del NIF no se corresponde');
						$('#dniNO').show();
						$('#dniOk').hide();
					}else{
						//alert('Dni correcto');
						$('#dniNO').hide();
						$('#dniOk').show();
					}
				}else{
					//alert('Dni erroneo, formato no válido');
					$('#dniNO').show();
					$('#dniOk').hide();
				}
			});

		</script>
	</div>
</body>
</html>