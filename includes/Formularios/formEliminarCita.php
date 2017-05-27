<?php
    require_once '/../config.php';
    //require_once '/../ModelScripts/GestorCitas.php';
    use \estatica\includes\ModelScripts\GestorCitas as GC;

    //$lista = new GestorCitas();
    
    $id = $_REQUEST['id'];
    $cita = GC::eliminaCita($id);

    header("Location: ../../citasPaciente.php");
?>