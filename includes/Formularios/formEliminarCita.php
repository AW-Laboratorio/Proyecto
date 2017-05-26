<?php
    require_once '/../config.php';
    require_once '/../ModelScripts/GestorCitas.php';

    $lista = new GestorCitas();
    
    $id = $_REQUEST['id'];
    $cita = $lista->eliminaCita($id);

    header("Location: ../../citasPaciente.php");
?>