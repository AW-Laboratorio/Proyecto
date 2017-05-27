<?php
    require_once __DIR__.'/includes/config.php';
    
?>
<?php
    require_once __DIR__.'/includes/config.php';
    use \estatica\includes\Aplicacion as App;
    use \estatica\includes\ViewScripts\CitasVista as PCV;
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
                    <h1>Pedir cita </h1>
                    <h2>Introduzca sus preferencias</h2>
                    
                    <form action="includes/Formularios/formCita.php" method="post">

                        <div class="pedirCitas">
                            <div class="caja">
                                <label for="espacialidad_cita">Seleccione la especialidad: </label>
                                <select name="cita" id="cita">
                                <option value="0"> Elige una opción </option>
                                <option value="Alergología">Alergología</option>    
                                <option value="Anestesiología">Anestesiología</option>
                                <option value="Cardiología">Cardiología</option>
                                <option value="Cirugía">Cirugía</option>
                                <option value="Dermatología">Dermatología</option>
                                <option value="Diagnóstico por imagen">Diagnóstico por imagen</option>
                                <option value="Digestivo">Digestivo</option>
                                <option value="Endocrinología">Endocrinología</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="Hematología">Hematología</option>
                                <option value="Medicina Interna">Medicina Interna</option>
                                <option value="Nefrología">Nefrología</option>
                                <option value="Neumología">Neumología</option>
                                <option value="Oftalmología">Oftalmología</option>
                                <option value="Oncología">Oncología</option>
                                <option value="Otorrinolaringología">Otorrinolaringología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Psiquiatría">Psiquiatría</option>
                                <option value="Radio Diagnóstico">Radio Diagnóstico</option>
                                <option value="Rehabilitación/Fisioterapia">Rehabilitación/Fisioterapia</option>
                                <option value="Reumatología">Reumatología</option>
                                <option value="Traumatología">Traumatología</option>
                                <option value="Oncología">Oncología</option>
                                <option value="Urología">Urología</option>
                                </select>
                            </div>
                            <div><p></p></div>
                            <div class="caja">
                                <label for="fecha_cita">Seleccione el día: </label>
                                <input type="date" name="fecha_cita" required>
                            </div>
                            <div class="caja">
                                <label for="hora_cita">Seleccione la hora: </label>
                                <input type="time" name="hora_cita" required>
                            </div>
                            <div class="caja">
                                <label for="telefono_cita">Teléfono de contacto: </label>
                                <input type="tel" name="telefono_cita">
                            </div>                        
                            
                        </div>
                        <div class="boton">
                            <button type="submit" class="boton_pedirCita">Pedir cita</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    
            <?php include('comun/pie.php');?>
        </div>
    </body>
</html>