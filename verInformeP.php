<?php
    require_once __DIR__.'/includes/config.php';
    use \estatica\includes\ViewScripts\InformesVista as IV;
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
                <?php
                    include('comun/menuMedico.php');
                ?>
                <div class="contenidopestanas">
                    <p><a href="agendaMedico.php">Volver a la agenda</a> </p>
                    <?php $afiliado = $_REQUEST['data'];
                        IV::verInformePaciente($afiliado, '4');
                    ?>
                 </div>

            </div>
             
            <?php include('comun/pie.php');?>
        </div>
    </body>
</html>