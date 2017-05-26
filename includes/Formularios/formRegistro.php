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

    $existeNumA = GP::existeNumAfiliado($numSS); //= $lista2->existeNumAfiliado($numSS);
    $existeEmail = GP::existeEmail($email);//$lista2->existeEmail($email);

    if($existeNumA == 0 && $existeEmail == 0){
        $login = GU::insertarUsuario($dni, $pass); //$lista->insertarUsuario($dni, $pass);
        if(!$login){
            $dniOk = 'false';
            header("Location: ../../Registro.php?dniOk=$dniOk");
        }
        else{
            $login2 = GP::insertarPaciente($numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo);//$lista2->insertarPaciente($numSS, $nombre, $apellidos, $dir, $dni, $email, $tfno, $fechaN, $sexo); 
            if(!$login2){
                GU::borrarUsuario($dni);//$lista->borrarUsuario($dni);
                header("Location: ../../Registro.php");
            }
            else{
                header("Location: ../../index.php");
            }
        }
    }else if ($existeNumA != 0){
        $numSSOk = 'false';
        header("Location: ../../Registro.php?numSSOk=$numSSOk");
    }
    else{
        $emailOk = 'false';
        header("Location: ../../Registro.php?emailOk=$emailOk");
    }
 ?>