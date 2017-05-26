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
                <?php
                    include('comun/menuMedico.php');
                ?>
                <div class="contenidopestanas">
                    <!--<form>
                        <label>Agenda del día:</label>
                        <input type="text" name="datapicker" value="<?php $hoy ?>">
                        <img class="calendar" src="img/calendar.png">
                    </form>-->
                    <div class="citas">
                        <h1>Agenda 
                            <?php 
                                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
                                echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ; 
                            ?>
                            
                        </h1>
                        <table class = "citas">
                            <tr>
                                <th>Hora</th>
                                <th>Paciente</th>
                                <th>Historia Clínica</th>
                            </tr>
                            <?php
                            
                    			$app = App::getSingleton();
                                $dni= $_SESSION['DNI'];
                    			//$vista = new CitasVista();
                    			//$vista->listaCitaMedico($dni);
                                CV::listaCitaMedico($dni);
                            ?>
                        </table>
                    </div>
                </div>
            </div>
             
            <?php include('comun/pie.php');?>
        </div>
    </body>
</html>