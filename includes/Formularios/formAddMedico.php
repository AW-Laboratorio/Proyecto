<?php
    require_once '/../config.php';
    //require_once '/../ModelScripts/GestorUsuarios.php';
    //require_once '/../ModelScripts/GestorPacientes.php';
    use \estatica\includes\ModelScripts\GestorUsuarios as GU;
    use \estatica\includes\ModelScripts\GestorMedicos as GM;

    //$lista = new GestorUsuarios();
   // $lista2 = new GestorPacientes();
    $dni = $_POST['dni'];
    $pass = $_POST['pass'];
    $numCol = $_POST['numcol'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $especialidad = $_POST['especialidad'];
    $consulta = $_POST['consulta'];
    $tfno = $_POST['telefono'];
    $email = $_POST['email'];

    GU::insertarUsuarioMedico($dni, $pass);
    GM::insertarMedico($numCol, $nombre, $apellidos, $dni, $email, $tfno, $consulta, $especialidad);

    header("Location: ../../panelAdministracion.php");

    
 ?>