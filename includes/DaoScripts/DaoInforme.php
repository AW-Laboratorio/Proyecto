<?php
/*require_once '/../ModelScripts/Informe.php';*/

namespace estatica\includes\DaoScripts;

require_once '/../config.php';
use \estatica\includes\Aplicacion as App;
use \estatica\includes\ModelScripts\Informe;

class DaoInforme
{

    private $array;

    public static function seleccionaInforme($idInforme)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = sprintf("SELECT * FROM informe WHERE idinforme='$idInforme'");
        $rs  = $con->query($sql) or die($con->error);

        if ($rs->num_rows == 1) {
            $fila    = $rs->fetch_assoc();
            $informe = new Informe($fila['idinforme'], $fila['NumAfiliado'], $fila['NumColegiado'], $fila['Motivo'], $fila['Reacciones'], $fila['Rx'], $fila['Diagnostico'], $fila['Tratamiento']);
            $rs->free();
            return $informe;
        }
        return false;
    }

    public function insertaInforme($NumAfiliado, $NumColegiado, $Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = "INSERT INTO informe (NumAfiliado,NumColegiado,Motivo, Reacciones,Rx, Diagnostico, Tratamiento) VALUES ( '$NumAfiliado','$NumColegiado','$Motivo', '$Reacciones', '$Rx', '$Diagnostico', '$Tratamiento')";
        $rs = $con->query($sql) or die($con->error);

    }

    public function eliminaInforme($idInforme)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = "DELETE FROM informe WHERE idInforme = '$idInforme'";
        $con->query($sql) or die($con->error);
    }

    public function modificaInforme($NumAfiliado, $NumColegiado,  $Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento)
    {
        $app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = "UPDATE informe SET NumAfiliado='NumAfiliado',NumColegiado='NumColegiado',Motivo='$Motivo',Reacciones='$Reacciones', Rx='$Rx',Diagnostico='$Diagnostico',Tratamiento='$Tratamiento' WHERE 1";
        $con->query($sql);
    }
    

}
