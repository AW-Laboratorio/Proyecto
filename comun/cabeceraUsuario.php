<?php
	
	use \estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
?>
<div class="cabecera">
        <img class="logo" src="img/YourHealth.png">
        <?php
                if($app->usuarioLogueado()){
                	if(isset($_SESSION['sexo'])=='Hombre'){
                		echo '<img class= "usuario" src="img/usuario.png">';
                	}else if (isset($_SESSION['sexo'])=='Mujer') {
                		echo '<img class= "usuario" src="img/usuaria.png">';
                	}
                }
        ?>
        
        <?php
        	if($app->usuarioLogueado()){
        
        	echo '<p class = "usuario">' . $_SESSION['nombre'] .' <a href="includes/Formularios/formLogout.php">Desconéctate</a></p>';
        }
        ?>
</div>
