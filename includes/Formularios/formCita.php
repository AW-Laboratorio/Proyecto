<?php
    
    require_once '/../config.php';
    //require_once '/../ModelScripts/GestorCitas.php';
    //require_once '/../ModelScripts/GestorMedicos.php';
    use \estatica\includes\ModelScripts\GestorCitas as GC;
    use \estatica\includes\ModelScripts\GestorMedicos as GM;
    use \estatica\includes\ModelScripts\GestorPacientes as GP;

    //$lista = new GestorCitas();
    //$gestor = new GestorMedico();
    $dni = $_SESSION['DNI'];
    $fecha = $_POST['fecha_cita'];
    $hora = $_POST['hora_cita'];
    $esp = $_POST['cita'];

    $numAfiliado = GP::buscaNumAfiliado($dni);
    $numColegiado= GM::buscaMedicoPorEspecialidad($esp);
    
    $cita = GC::insertarCita($numAfiliado, $numColegiado, $fecha, $hora);

    header("Location: ../../citasPaciente.php");
?>