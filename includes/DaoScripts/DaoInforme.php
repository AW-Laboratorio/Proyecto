<?php
/*require_once '/../ModelScripts/Informe.php';*/

namespace estatica\includes\DaoScripts;

require_once '/../config.php';
use \estatica\includes\Aplicacion as App;
use \estatica\includes\ModelScripts\Informe;

class DaoInforme
{

    private $array;

    public function seleccionaInforme($idinforme)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = sprintf("SELECT * FROM informe WHERE idinforme='$idinforme'");
        $rs  = $con->query($sql) or die($con->error);

        if ($rs->num_rows == 1) {
            $fila    = $rs->fetch_assoc();
            $informe = new Informe($fila['idinforme'], $fila['Motivo'], $fila['Reacciones'], $fila['$Rx'], $fila['$Diagnostico'], $fila['$Tratamiento']);
            $rs->free();
            return $informe;
        }
        return false;
    }

    public function insertaInforme($Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = "INSERT INTO informe (Motivo, Reacciones,Rx, Diagnostico, Tratamiento) VALUES ( '$Motivo', '$Reacciones', '$Rx', '$Diagnostico', '$Tratamiento')";
        //echo " guardado en la base de datos";
        $rs = $con->query($sql) or die($con->error);

    }

    public function eliminaInforme($idinforme)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = "DELETE FROM informe WHERE idinforme = '$idinforme'";
        $con->query($sql) or die($con->error);
    }

    public function modificaInforme($idinforme, $Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = "UPDATE informe SET Motivo='$Motivo',Reacciones='$Reacciones', Rx='$Rx',Diagnostico='$Diagnostico',Tratamiento='$Tratamiento' WHERE idinforme='$idinforme'";
        $con->query($sql);
    }

}
