<?php
namespace estatica\includes\ModelScripts;
require_once __DIR__ . '/includes/config.php';


use \estatica\includes\ModelScripts\GestorMedicos as GM;


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Informe</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
        <link href="css/informe.css" rel="stylesheet" type="text/css"/>
       <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>


        <div class="contenedor">
        <?php include 'comun/cabeceraUsuario.php';?>

        <form action="includes/Formularios/formModInforme.php" method="post">
        <?php
            $numA = $_POST['numA']; $numC = $_POST['numC']; $motivo = $_POST['motivo'];
            $rea = $_POST['rea'];  $rx = $_POST['rx'];   $diag = $_POST['diag'];
            $trat = $_POST['trat']; $idinf = $_POST['idinf'];
    
    
       
        ?>
                <h1>
                 INFORME DE CONSULTA
                </h1>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <label>
                            Numero De Afiliado
                            <input type="text" name="NumAfiliado" value="<?php echo $numA; ?>">
                            </label>
                            <label>
                            Numero De Colegiado
                            <input type="text" name="NumColegiado" value="<?php echo $numC; ?>">
                            </label>

                        </p>
                        <p>
                            <h3>
                                MOTIVO DE LA CONSULTA
                            </h3>
                        </p>
                        <textarea id="texto" name="Motivo"><?php echo $motivo;?></textarea>
              
                        <p>
                            <h3>
                                REACCIONES ADVERSAS A MEDICAMENTOS
                            </h3>
                        </p>
                        <textarea id="texto" name="Reacciones"><?php echo $rea; ?></textarea>

                        <p>
                            <h3>
                                RX
                            </h3>
                        </p>
                        <textarea id="texto" name="Rx"><?php echo $rx; ?></textarea>
                        <p>
                            <h3>
                                DIAGNÓSTICO
                            </h3>
                        </p>
                        <textarea id="texto" name="Diagnostico"><?php echo $diag; ?></textarea>
                        <p>
                            <h3>
                                TRATAMIENTO
                            </h3>
                        </p>
                        <textarea id="texto" name="Tratamiento"><?php echo $trat; ?></textarea>
                        <div id="botones">
                        <button type="submit" name="Guardar" class="btn btn-primary" >Guardar</button>
                         <button type="submit"><a href="informe.php" title="">Regresar</a></button>
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
