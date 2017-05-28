<?php

/*require_once '/../DaoScripts/DaoInforme.php';*/
namespace estatica\includes\ModelScripts;

use \estatica\includes\DaoScripts\DaoInforme as DI;
use ArrayObject;

class GestorInformes
{

    private $dao;
/*
public function __construct()
{
$this->dao = new DaoInformes();
if (!isset($_SESSION)) {
session_start();
}

}*/
    public static function GestorInformes()
    {
        self::$dao = DI::DaoInformes();
        if (!isset($_SESSION)) {
            session_start();
        }

    }

    public function insertarInforme($Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento)
    {
        $Motivo      = htmlspecialchars(trim(strip_tags($Motivo)));
        $Reacciones  = htmlspecialchars(trim(strip_tags($Reacciones)));
        $Rx          = htmlspecialchars(trim(strip_tags($Rx)));
        $Diagnostico = htmlspecialchars(trim(strip_tags($Diagnostico)));
        $Tratamiento = htmlspecialchars(trim(strip_tags($Tratamiento)));
        return (DI::insertaInforme($Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento));

    }

    public function modificarInforme($Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento)
    {
        $Motivo      = htmlspecialchars(trim(strip_tags($Motivo)));
        $Reacciones  = htmlspecialchars(trim(strip_tags($Reacciones)));
        $Rx          = htmlspecialchars(trim(strip_tags($Rx)));
        $Diagnostico = htmlspecialchars(trim(strip_tags($Diagnostico)));
        $Tratamiento = htmlspecialchars(trim(strip_tags($Tratamiento)));
        return ($this->dao->modificaInforme($Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento));
    }

    public static function buscaInforme($id){
        $idN = htmlspecialchars(trim(strip_tags($id)));
        return(DI::seleccionaInforme($idN));
    }

    public static function getListaInforme(){
          $lista = DI::listaInforme();
          $array = new ArrayObject();
            for($i= 0; $i <sizeof($lista)-1 ; $i++){
                $array->append(new Informe($lista[$i]['IdMedico'], $lista[$i]['NumColegiado'],$lista[$i]['Nombre'], $lista[$i]['Apellidos'], $lista[$i]['DNI'], $lista[$i]['Consulta'], $lista[$i]['Telefono'], $lista[$i]['Correo'], $lista[$i]['Especialidad']));
            }
          return $array;

        }

}
