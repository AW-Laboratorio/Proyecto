<?php
    
    require_once '/../config.php';
    //require_once '/../ModelScripts/GestorCitas.php';
    //require_once '/../ModelScripts/GestorMedicos.php';
    use \estatica\includes\ModelScripts\GestorCitas as GC;
    use \estatica\includes\ModelScripts\GestorMedicos as GM;
    use \estatica\includes\ModelScripts\GestorPacientes as GP;

    $idCita = $_REQUEST['data'];

    if(GC::eliminaCita($idCita)){
        header("Location: ../../pedirCita.php");
    }else{
        header("Location: ../../citasPaciente.php");
    }


    
?>