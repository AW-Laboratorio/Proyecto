<?php
    require_once '/../config.php';
    //require_once '/../ModelScripts/GestorUsuarios.php';
    //require_once '/../ModelScripts/GestorPacientes.php';
    use \estatica\includes\ModelScripts\GestorUsuarios as GU;
    use \estatica\includes\ModelScripts\GestorPacientes as GP;

    //$lista = new GestorUsuarios();
   // $lista2 = new GestorPacientes();
    $dni = $_POST['dni'];
    $pass = $_POST['pass'];
    $numSS = $_POST['num_seg_social'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $fechaN = $_POST['fecha_nacimiento'];
    $tfno = $_POST['telefono'];
    $email = $_POST['email'];
    $dir = $_POST['direccion'];

    GU::insertarUsuario($dni, $pass); //$lista->insertarUsuario($dni, $pass);
    GP::insertarPaciente($numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo);//$lista2->
    
    header("Location: ../../panelAdministracion.php");
 ?>