<?php
    require_once '/../config.php';
    //require_once '/../ModelScripts/GestorCitas.php';
    use \estatica\includes\ModelScripts\GestorNoticias as GN;

    //$lista = new GestorCitas();
    
    $fecha = $_REQUEST['fecha'];
    $noticia = GN::borrarNoticia($fecha);

    //header("Location: ../../citasPaciente.php");
    header("Location: ../../adminNoticias.php");
?>