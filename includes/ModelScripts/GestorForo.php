<?php
  
  /*require_once '/../DaoScripts/DaoForo.php';*/
  namespace estatica\includes\ModelScripts;
  use \estatica\includes\DaoScripts\DaoForo as DF;
  use ArrayObject;
  
  class GestorForo{

    private $dao;

    function __construct(){
      $this->dao = new DaoForos();
      if(!isset($_SESSION)) session_start();
    }

    public static function getForo($IdForo){
      $ID = htmlspecialchars(trim(strip_tags($IdForo)));
      return (DF::seleccionaForo($ID));
    }

    public static function insertarForo($Nombre, $Tema, $UltParticipante, $Creador){
          
            $Nombre = htmlspecialchars(trim(strip_tags($Nombre)));
          $Temma = htmlspecialchars(trim(strip_tags($Tema)));
          $UltParticipante = htmlspecialchars(trim(strip_tags($UltParticipante)));
          $Creador = htmlspecialchars(trim(strip_tags($Creador)));

          DF::insertaForo(/*$IdForo,*/ $Nombre, $Tema, $UltParticipante, $Creador);
        }


        public static function borrarForo($Tema){
            $Tema = htmlspecialchars(trim(strip_tags($Tema)));
            
            DF::borraForo($Tema);
        }
        
        public static function existeForo($IdForo){
      $IdForo = htmlspecialchars(trim(strip_tags($IdForo)));
      return (DP::existeForo($IdForo));
    }
        
        public static function getListaForo(){
            $lista = DF::listaForo();
            $array = new ArrayObject();
            for($i= 0; $i < sizeof($lista)-1 ; $i++){
                $array->append(new Foro($lista[$i]['IdForo'], $lista[$i]['Nombre'],$lista[$i]['Tema'], $lista[$i]['UltParticipante'], $lista[$i]['Creador']));
            }
            return $array;
        }
        
        public static function buscaForo($IdForo){
            $IdForo = htmlspecialchars(trim(strip_tags($IdForo)));
            return (DF::buscarForo($IdForo));
        }
     
        public static function getUltimoForo(){
           return (DF::cogeUltimoForo());
        }
        
        

  }

?>