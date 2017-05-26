<?php
    
    require_once '/../config.php';
    require_once '/../ModelScripts/GestorCitas.php';
    require_once '/../ModelScripts/GestorMedicos.php';

    $lista = new GestorCitas();
    $gestor = new GestorMedico();
    $numAfiliado = $_SESSION['num_seg_social'];
    $numColegiado = $_POST['medico_cita'];
    $fecha = $_POST['fecha_cita'];
    $hora = $_POST['hora_cita'];

    $cita = $lista->insertarCita($numAfiliado, $numColegiado, $fecha, $hora);

    header("Location: ../../citasPaciente.php");
?>