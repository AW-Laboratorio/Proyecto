<?php
	require_once __DIR__.'/includes/config.php';
	use \estatica\includes\Aplicacion as App;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Login</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
        <link rel="stylesheet" type="text/css" href="css/comun.css">
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body> 
	
	<div class="contenedor">

		<?php include('comun/cabecera.php');?>  

	    <div class="cuerpo">
		    <?php
		    	
		    	$app = App::getSingleton();
		    	@$logueado = $_REQUEST['ok'];
		    	if($logueado == 'false'){
		    		echo "<script language='JavaScript'>alert('El usuario o la contraseña no son correctos');</script>"; 
		    	}


		     ?>
		    <div class ="cuerpoLogin">
				<h1>INICIAR SESIÓN </h1>

				<form action="includes/Formularios/formLogin.php" method="post">
			
				<div>
				    <label for="dni" class="align">DNI/ PASAPORTE :</label>
				    <input type="text" name ="dni" placeholder="Introducir DNI/ PASAPORTE" required/>
				</div>

				<div>
				    <label for="pass" class="align">CONTRASEÑA:</label>
				    <input type="password" name ="pass" placeholder="Introducir contraseña" required/>

				</div>

					<input type="submit" value="Acceder" class="validarPaciente";"/>
					
				</form>
		
        	</div>
        	    
               
	    </div>
		
		<?php include('comun/pie.php');?>
	</div>
</body>
</html>