<?php
    require_once __DIR__.'/includes/config.php';
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
                <?php include('comun/menuPaciente.php');?>
                <div class="contenidopestanas">
                    <div class="citas">
                        <h1>Informes</h1>
                        <div class = "cajaCita">
                            <h3>RX Brazo Derecho</h3>
                            <p>Doctor Jaime Pérez</p>
                            <p>06/03/2016</p>
                            <a href="verInformeP.php"><button class = "cambio">Ver</button></a>
                            <button class = "anular">Descargar</button></a>
                        </div>
                        <div class = "cajaCita">
                            <h3>Informe Otorrino</h3>
                            <p>Doctora Alicia Sánchez</p>
                            <p>12/03/2016</p>
                            <a href="verInformeP.php"><button class = "cambio">Ver</button></a>
                            <button class = "anular">Descargar</button>
                        </div>
                        <div class = "cajaCita">
                            <h3>Revisión Dermatología</h3>
                            <p>Doctor Héctor Gómez</p>
                            <p>17/03/2016</p>
                            <a href="verInformeP.php"><button class = "cambio">Ver</button></a>
                            <button class = "anular">Descargar</button>
                        </div>
                        <div class = "cajaCita">
                            <h3>Dermatología</h3>
                            <p>Doctor Álvaro Moya</p>
                            <p>17/03/2016</p>
                            <a href="verInformeP.php"><button class = "cambio">Ver</button></a>
                            <button class = "anular">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
             
            <?php include('comun/pie.php');?>
        </div>
    </body>
</html>