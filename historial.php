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
                <?php include('comun/menuMedico.php');?>
                <div class="contenidopestanas">
                    <div class="histotial">
                        <h1>Historial Clínico Luisa Fernández Olivares</h1>
                        <table class = "historial">
                            <tr>
                                <th>Fecha</th>
                                <th>Especialidad</th>
                                <th>Informe</th>
                            </tr>
                            <tr>
                                <td>12/02/2017</td>
                                <td>Traumatología</td>
                                <td><a href="verInforme.php"><img class="informe" src="img/informe.png"></a></td>
                            </tr>
                            <tr>
                                <td>17/01/2017</td>
                                <td>Otorrinolaringología</td>
                                <td><a href="verInforme.php"><img class="informe" src="img/informe.png"></a></td>
                            </tr>
                            <tr>
                                <td>12/12/2016</td>
                                <td>Traumatología</td>
                                <td><a href="verInforme.php"><img class="informe" src="img/informe.png"></a></td>
                            </tr>
                            <tr>
                                <td>21/11/2016</td>
                                <td>Médico de Cabecera</td>
                                <td><a href="verInforme.php"><img class="informe" src="img/informe.png"></a></td>
                            </tr>
                            <tr>
                                <td>15/11/2016</td>
                                <td>Enfermería</td>
                                <td><a href="verInforme.php"><img class="informe" src="img/informe.png"></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
             
            <?php include('comun/pie.php');?>
        </div>
    </body>
</html>