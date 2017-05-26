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
                <?php
                    include('comun/menuMedico.php');
                ?>
                <div class="contenidopestanas">
                    <p><a href="historial.php">Volver a la lista de informes</a> </p>
                    <div class="datosPaciente">
                        <h1>Informe Traumatología</h1>
                        <h3>Datos Paciente</h3>
                        <div class="datos">
                            <h4>N.H.C: </h4><p>53429</p>
                        </div>
                        <div class="datos">
                            <h4>Nombre y Apellidos: </h4><p>Luisa Fernández Pérez</p>
                        </div>
                        <div class="datos">
                            <h4>NIF: </h4><p>01234567F</p>
                        </div>
                        <div class="datos">
                            <h4>Fec.Nacimiento: </h4><p>27/03/1978</p>
                        </div>
                        <div class="datos">
                            <h4>Edad: </h4><p>45</p>
                        </div>
                        <div class="datos">
                            <h4>Sexo: </h4><p>Mujer</p>
                        </div>
                        <div class="datos">
                            <h4>Teléfonos: </h4><p>912345678  634512343  689668812</p>
                        </div>
                        <div class="datos">
                            <h4>Dirección: </h4><p>Calle Menendez Pelayo, 23 Portal 3 Bajo B Boadilla del Monte Madrid 28080</p>
                        </div>
                        <h3>Comentario</h3>
                        <div class="comentario">
                            <div class= "datos">
                                <p>Paciente de 45 años que presenta leves síntomas de condromalacia rotuliana en ambas rodillas tras exploración en consulta. No hay síntomas de rotura de hueso.</p>
                                <p>Se manda radiografía de ambas rodillas y regresar en dos meses para ver resultados.</p>
                                <p>Se prescribe tratamiento a continuación para aliviar posibles dolores.</p>
                            </div>
                        </div>
                        <h3>Tratamiento</h3>
                        <div class="tratamiento">
                            <div class= "datos">
                                <p>Nolotil en cápsulas</p>
                                <p>Paracetamol 1g, alternar cada 4h si mucho dolor</p>
                            </div>
                        </div>
                        <h3>Médico Responsable</h3>
                        <div class="firma">
                            <div class="datos">
                                <h4>Autor/a del informe: </h4><p>Dra. Jiménez</p>
                            </div>
                            <div class="datos">
                                <h4>Número Colegiado: </h4><p>53429635849</p>
                            </div>
                        </div>
                    </div>
                 </div>

            </div>
             
            <?php include('comun/pie.php');?>
        </div>
    </body>
</html>