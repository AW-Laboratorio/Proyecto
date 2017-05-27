<?php
    require_once __DIR__.'/includes/config.php';
    /*require_once('includes/ViewScripts/CitasVista.php');*/
    use \estatica\includes\Aplicacion as App;
    use \estatica\includes\ViewScripts\CitasVista as CV;
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
            <?php include('comun/cabeceraUsuario.php');?>
             
            <div class="cuerpo">
                <?php include('comun/menuPaciente.php'); ?>
                <div class="contenidopestanas">         
                   <div class="citas">
                        <h1>Próximas citas</h1>
                        <?php
                        
                            $app = App::getSingleton();
                            $dni= $_SESSION['DNI'];
                            //$vista = new CitasVista();
                            //$vista->listaCitaPaciente($dni);
                            CV::listaCitaPaciente($dni);
                        ?>
                    </div>
                </div>
            </div>
             
           <?php include('comun/pie.php');?>
        </div>
    </body>
</html>