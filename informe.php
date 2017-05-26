<?php
require_once __DIR__ . '/includes/config.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Informe</title>
        <link href="css/informe.css" rel="stylesheet" type="text/css"/>
       <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>


        <div class="contenedor">
        <?php include 'comun/cabeceraUsuario.php';?>

        <form action="includes/Formularios/formAddInforme.php" method="post">

                       <h1>
                 INFORME DE CONSULTA
                </h1>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <h3>
                                MOTIVO DE LA CONSULTA
                            </h3>
                        </p>
                        <textarea id="texto" name="Motivo"></textarea>
                        <p>
                            <h3>
                                REACCIONES ADVERSAS A MEDICAMENTOS
                            </h3>
                        </p>
                        <textarea id="texto" name="Reacciones"></textarea>

                        <p>
                            <h3>
                                RX
                            </h3>
                        </p>
                        <textarea id="texto" name="Rx"></textarea>
                        <p>
                            <h3>
                                DIAGNÓSTICO
                            </h3>
                        </p>
                        <textarea id="texto" name="Diagnostico"></textarea>
                        <p>
                            <h3>
                                TRATAMIENTO
                            </h3>
                        </p>
                        <textarea id="texto" name="Tratamiento"></textarea>
                        <div id="botones">
                        <input type="submit" name="enviar" class="btn btn-primary" value="enviar">

                        </div>
                    </div>
                </div>
                  </form>
            </div>
        <footer class="footer">
            <div class="pie">
                <p>
                    pie de pagina
                </p>
            </div>
        </footer>
        </div>
    </body>
</html>
