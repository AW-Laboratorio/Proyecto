<?php 
    namespace estatica\includes\ViewScripts;
    use \estatica\includes\ModelScripts\GestorForo as GF;
    use \estatica\includes\ModelScripts\GestorMensajesForo as GMF;

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
                    <td class="tema"><a href="mensajesForo.php?data=$IdForo&tema=$Tema">$Tema</a></td>
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

        public static function listaMensajesForo($idforo, $tema){
            $lista = GMF::getListaMensajesForo($idforo); //$this->ListaForo->getListaForo();
            $iterator = $lista->getIterator();
            
            while($iterator->valid()){
                $IdMensaje = $iterator->current()->getIdMensaje();
                $IdForo = $iterator->current()->getIdForo();
                $Usuario = $iterator->current()->getUsuario();
                $Mensaje = $iterator->current()->getMensaje();
                $Fecha = $iterator->current()->getFecha();
                $html = <<<EOS
                
                <div class="cajaForo">
                    <h3>$Usuario</h3>
                    <p class="fecha">$Fecha</p>
                    <p class="texto">$Mensaje</p>
                    <div class="links">
                        <a href="nuevoComentario.php?data=$idforo&tema=$tema">Responder</a>
                    </div>
                </div>
EOS;
            echo $html;
            $iterator->next();   
            }
       
        }
        
    }
?>