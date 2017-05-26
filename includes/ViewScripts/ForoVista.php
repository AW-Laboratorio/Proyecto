<?php 
    namespace estatica\includes\ViewScripts;
    use \estatica\includes\ModelScripts\GestorForo as GF;
    
    class ForoVista{
        
        private $ListaForo;
        
        function __construct(){
            
            /*require_once '/../ModelScripts/GestorForo.php';*/
            //$this->ListaForo = new GestorForo();
            $ListaForo = GF::GestorForo();
        }
        
        public static function listaForo(){
            $lista = GF::getListaForo(); //$this->ListaForo->getListaForo();
            $iterator = $lista->getIterator();
            
            while($iterator->valid()){
                $IdForo = $iterator->current()->getIdForo();
                $Nombre = $iterator->current()->getNombre();
                $Tema = $iterator->current()->getTema();
                $UltParticipante = $iterator->current()->getUltParticipante();
                $Creador = $iterator->current()->getCreador();
                $html = <<<EOS
                
                <tr>
                    <td class="tema"><a href="foro.php">$Tema</a></td>
                    <td>$Creador</td> 
                    <td>5</td>
                    <td>$UltParticipante</td>
                </tr>
EOS;
            echo $html;
            $iterator->next();   
            }
       
        }
        
        public static function muestraUnForo(){
            
            $lista = GF::getUltimoForo(); //$this->ListaForo->getUltimoForo();
            
            $IdForo = $lista->getIdForo();
            $Nombre = $lista->getNombre();
            $Tema = $lista->getTema();
            $UltParticipante = $lista->getUltParticipante();
            $Creador = $lista->getCreador();
            $html = <<<EOS
                <div class = "foro">
                    <h1><a href="foro.php">Foro</a></h1>
                    <h4>$Tema</h4>
                    <p>$Nombre</p>
                    <p>$Creador</p>
                </div>
EOS;
            echo $html;
            
        }
        
    }
?>