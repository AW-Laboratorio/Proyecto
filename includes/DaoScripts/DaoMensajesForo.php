<?php 
    /*require_once '/../ModelScripts/MensajesForo.php';*/
    
    namespace estatica\includes\DaoScripts;

    require_once '/../config.php';
    use \estatica\includes\Aplicacion as App;
    use \estatica\includes\ModelScripts\MensajesForo;

    class DaoMensajesForo{
        
        private $array;
        
        public static function seleccionamensajesforo($IdInforme){
            $app = App::getSingleton();
            $con = $app->conexionBd();
            $sql =sprintf("SELECT * FROM mensajesforo WHERE IdInforme='IdInforme'");
            $rs = $con->query($sql) or die ($con->error);
            
            if($rs-> num_rows == 1){
                $fila = $rs->fetch_assoc();
                $paciente = new mensajesforo($fila['IdInforme'], $fila['Usuario'],$fila['Mensaje'],$fila['Fecha']);
                $rs->free();
                return $mensajesforo;
            }
            return false;
        }
        
        public static function insertamensajesforo($Usuario, $Mensaje, $Fecha){
            $app = App::getSingleton();
            $con = $app->conexionBd();
            $sql = "INSERT INTO mensajesforo (Usuario, Mensaje, Fecha) VALUES ('$Usuario', '$Mensaje', '$Fecha')");
            $rs = $con->query($sql) or die ($con->error);
        }
        
        public static function eliminarmensajesforo($IdInforme){
            $app = App::getSingleton();
            $con = $app->conexionBd();
            $sql = "DELETE FROM mensajesforo WHERE IdInforme = '$IdInforme'";
            $con->query($sql) or die ($con->error);
        }
        
        public static function existemensajesforo(IdInforme){
            $app = App::getSingleton();
            $con = $app->conexionBd();
            $numCol=0;
            $sql = sprintf("SELECT * FROM mensajesforo WHERE IdInforme='$IdInforme'");
            $rs = $con->query($sql) or die ($con->error);
            $numCol = $rs->num_rows;
            $rs->num_rows;
            return $numCol;
        }
        
        public static function modificarmensajesforo($Usuario, $Mensaje, $Fecha){
            $app = App::getSingleton();
            $con = $app-> conexion();
            $sql = "UPDATE mensajesforo SET Usuario='$Usuario', Mensaje='$Mensaje', Fecha'$Fecha' WHERE IdInforme='$IdInforme'";
            $con->query($sql);
        }
        
        public static function buscarUsuariomensajesforo($IdInforme){
            $app = App::getSingleton();
            $con = $app->conexionBd();
            $sql = sprintf("SELECT * FROM mensajesforo WHERE IdInforme='$IdInforme'");
            $rs = $con->query($sql) or die ($con->error);
            
            if($rs-> num_rows == 1){
                $fila = $rs->fetch_assoc();
                $mensajesforo = $fila['Usuario'];
                $rs->free();
                return $mensajesforo;
            }
            return false;
            
        }
        
        public static function buscarFechaMensajeforo($IdInforme){
            $app = App::getSingleton();
            $con = $app->conexionBd();
            $sql = sprintf("SELECT * FROM mensajesforo WHERE IdInforme='$IdInforme'");
            $rs = $con->query($sql) or die ($con->error);
            
            if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$mensajesforo = $fila['Fecha'];
				$rs->free();
				return $mensajesforo;
			}
            return false;
        }
    }
?>