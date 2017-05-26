<?php
	/*require_once '/../ModelScripts/Usuario.php';
	require_once 'DaoPacientes.php';
	require_once 'DaoMedicos.php';*/
	
	namespace estatica\includes\DaoScripts;

	require_once '/../config.php';
	use \estatica\includes\Aplicacion as App;
	
	use \estatica\includes\ModelScripts\Usuario;
	use \estatica\includes\DaoScripts\DaoPacientes;
	use \estatica\includes\DaoScripts\DaoMedicos;

	class DaoUsuarios{

		private $array;
		
		public static function listaUsuarios($dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM usuarios WHERE DNI='%s'", $con->real_escape_string($dni));
      		$rs = $con->query($sql) or die ($con->error);
      		
			if($rs->num_rows > 0){
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return($lista);
			} 
		}

		public static function existeUsuario($dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$numCol = 0;
			$sql = sprintf("SELECT * from usuarios where DNI = '%s'", $con->real_escape_string($dni));
			$rs = $con->query($sql) or die ($con->error);

			$numCol = $rs->num_rows;
			$rs->num_rows;

			return($numCol);
		}

		public static function compruebaLogin($dni, $pass){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM usuarios WHERE DNI = '%s'", $con->real_escape_string($dni));
			$rs = $con->query($sql); //or die ($con->error);
			$login =false;
			if($rs){
				while($row = $rs->fetch_assoc()){    
					$hash = $row['Pass'];
			
					$key='';  
				    $passBd = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($hash), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

					if ($pass == $passBd) { 
						$usuario = new Usuario($row['IdUsuario'], $row['DNI'], $pass, $row['Rol']);
						
						if($row['Rol'] == 'Paciente'){
							$daoP = new DaoPacientes();
							$nombre = $daoP->buscaNombrePaciente($row['DNI']);
							$sexo = $daoP->buscaSexoPaciente($row['DNI']);
						}elseif ($row['Rol'] == 'Medico') {
							$daoM = new DaoMedicos();
							$nombre = $daoM->buscaNombreMedico($row['DNI']);
							$sexo = '';
						}
						
						$app->login($usuario, $nombre, $sexo);
						$login=true;
					}
				}
			}
			return $login;
		}
		
		public static function insertaUsuario($dni, $pass, $rol){
			$app = App::getSingleton();
            $con = $app->conexionBd();
		
			/*$opciones = [
				'cost' => 11,
				'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
			];
			$contra = $pass;
			$contra = password_hash($contra, PASSWORD_BCRYPT, $opciones).'\n';*/

			$key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    		$contra = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $pass, MCRYPT_MODE_CBC, md5(md5($key))));
			
			$sql = "INSERT INTO usuarios (DNI, Pass, Rol)
			VALUES ( '$dni', '$contra', '$rol')";
			$rs = $con->query($sql) or die ($con->error);

		}

		public static function borraUsuario($DNI){
			$app = App::getSingleton();
			$con = $app->conexionBd();
            $sql = "DELETE FROM usuarios WHERE DNI='$DNI'";
			$con->query($sql) or die ($con->error);
		}

		public static  function seleccionaUsuario($DNI){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM usuarios WHERE DNI='$DNI'");
      		$rs = $con->query($sql) or die ($con->error);

			if($rs->num_rows == 1){
				$fila = $rs->fetch_assoc();
				$usuario = new Usuario($fila['idUsuario'], $fila['DNI'], $fila['pass'], $fila['rol']);
				$rs->free();
				return $usuario;
			}
			return false;
		}
		
		public static  function modificarPass($dni, $pass){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			/*$opciones = [
				'cost' => 11,
				'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
			];
			$contra = $pass;
			$contra = password_hash($contra, PASSWORD_BCRYPT, $opciones).'\n';*/

			$key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    		$contra = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $pass, MCRYPT_MODE_CBC, md5(md5($key))));
    		
            $sql = "UPDATE usuarios SET pass='$contra' WHERE DNI= '$dni'";
			$con->query($sql);
		}

		public static function usuarioCorrecto($dni){
		    $app = App::getSingleton();
		    $con = $app->conexionBd();
		    $sql = sprintf("SELECT * FROM usuarios WHERE DNI = '%s'", $con->real_escape_string($dni));
		    
		    $rs = $con->query($sql) or die ($con->error);
		    if($rs != NULL){
		    	$num_cols = $rs->num_rows;
		        $rs->free();
		        return $num_cols;
		    }
	    }

	    public static  function compruebaPass($dni, $pass){
	    	$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql =sprintf("SELECT * FROM usuarios WHERE DNI='$dni'");
      		$rs = $con->query($sql) or die ($con->error);

			$fila = $rs->fetch_assoc();
			$hash = $fila['Pass'];
			$rs->free();

			$key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
			$passBd = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($hash), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

			if($passBd == $pass){
				return true;
			}else{
				return false;
			}
			
	    }

	    
	

	}
?>
