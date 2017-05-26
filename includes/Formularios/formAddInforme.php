<?php
require_once '/../config.php';
//require_once '/../ModelScripts/GestorInforme.php';
use \estatica\includes\ModelScripts\GestorInformes as GI;

$Motivo      = $_POST['Motivo'];
$Reacciones  = $_POST['Reacciones'];
$Rx          = $_POST['Rx'];
$Diagnostico = $_POST['Diagnostico'];
$Tratamiento = $_POST['Tratamiento'];

$Informe = GI::insertarInforme($Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento);

header("Location: ../../agendaMedico.php");
