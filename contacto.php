<!DOCTYPE html>
<html>
    <head>
        <title>Contacto</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
        <link rel="stylesheet" type="text/css" href="css/comun.css">
		<!--<link rel="stylesheet" type="text/css" href="css/contacto.css">-->
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="contenedor">
            <?php include('comun/cabecera.php'); ?>
			<div class="cuerpo">
				<div class="contacto">
					<h1>Contacto</h1>
					<form method="post" action="mailto:lauriane.pujol@hotmail.fr" enctype="text/plain">
				
						<h2>Datos obligatorios</h2>								
						<div>
						<label for="apellidos" class="align">Apellidos :</label>
						<input type="text" size="40" id="apellido" name="apellido" required>
						</div>

						<div>
						<label for="nombre" class="align">Nombre :</label>
						<input type="text" size="40" id="nombre" name="nombre" required>
						</div>

						<div>
						<label for="correo_electr" class="align">Correo electrónico :</label>
						<input type="email" size="40" id="email" name="correo_electr" required>
						<img id="emailNO" src="img/no.png" >
						<img id="emailOk" src="img/ok.png" hidden="true">
						</div>

						<h2>Otros datos</h2>
						<div>
						<label for="domicilio" class="align">Domicilio :</label>
						<input type="text" size="40" id="domicilio" name="domicilio" required>
						</div>

						<div>
						<label for="poblacion" class="align">Población:</label>
						<input type="text" size="20" id="poblacion" name="poblacion" required>
						</div>

						<div>
						<label for="CP" class="align">CP :</label>
						<input type="text" size="5" id="CP" name="CP" required>
						</div>

						<div>
						<label for="provincia" class="align">Provincia :</label>
						<input type="text" size="40" id="provincia" name="provincia" required>
						</div>

						<div>
						<label for="pais" class="align">País :</label>
						<select name="pays" id="pays">
							<option value="espana">España</option>
							<option value="francia">Francia</option>
							<option value="italia">Italia</option>
							<option value="ingleterra">Ingleterra</option>
							<option value="portugal">Portugal</option>
						</select>
						</div>
						
						<h2>Escriba aquí su mensaje</h2>			
						<div>
						<label for="asunto" class="align">Asunto :</label>
						<input type="text" size="40" id="asunto" name="asunto" required>
						</div>

						<div>
						<label for="message" class="align">Mensaje :</label>
						<textarea cols="60" rows="8" name="message" id="message"></textarea>
						</div>
					
						<div>
						<input type="checkbox" name="verif_condiciones" required>
						<label>Marque esta casilla para verificar que ha leído nuestros términos y condiciones del servicio</label>
						</div>
						
					</form>
					
					<div>
						<input type="submit" value="Enviar consulta" onclick="window.location.href='confirmacion_contacto.php';"/>
						<input type="submit" value="Restablecer" onclick="window.location.href='contacto.php';"/>
					</div>
					
				</div>
	        </div>
             
            <?php include('comun/pie.php');?>

            <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
			
			
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

		</script>
        </div>
     
    </body>
</html>