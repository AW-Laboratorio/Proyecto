<?php
	
    namespace estatica\includes\ViewScripts;
    use \estatica\includes\ModelScripts\GestorNoticias as GN;
    
	class NoticiasVista{

		private $ListaNoticias;
		
		function __construct(){

			/*require_once '/../ModelScripts/GestorNoticias.php';*/
			//$this->ListaNoticias = new GestorNoticias();
            $ListaNoticias = GN::GestorNoticias();
		}

		public static function listaNoticia(){
            $lista = GN::getListaNoticia();//$this->ListaNoticias->getListaNoticia();
            $iterator = $lista->getIterator();

            while($iterator->valid()){

                $id = $iterator->current()->getIdNoticia();
                $fecha = $iterator->current()->getFecha();
                $titulo = $iterator->current()->getTitulo();
                $texto = $iterator->current()->getTexto();
                $html = <<<EOS

                <div class="noticia">
                    <h5>$fecha</h5>
                    <h4><a href="#"> $titulo</a></h4>
                    <p>$texto</p>
                </div>
EOS;
            echo $html;
            $iterator->next();
            }

		}

        public static function muestraUnaNoticia(){

            //$lista = $this->ListaNoticias->getUltimaNoticia();
            $lista = GN::getUltimaNoticia();
            
            $id = $lista->getIdNoticia();
            $fecha = $lista->getFecha();
            $titulo = $lista->getTitulo();
            $texto = $lista->getTexto();
            $html = <<<EOS
                <div class = "noticias">
                    <h1><a href="noticias.php">Noticias</a></h1>
                    <h4>$titulo</h4>
                    <p>$texto</p>
                    <p>$fecha</p>
                </div>
EOS;
            echo $html;

        }

        public static function listaNoticiasAdmin(){
            $lista = GN::getListaNoticia();//$this->ListaNoticias->getListaNoticia();
            $iterator = $lista->getIterator();

            while($iterator->valid()){

                $id = $iterator->current()->getIdNoticia();
                $fecha = $iterator->current()->getFecha();
                $titulo = $iterator->current()->getTitulo();
                $texto = $iterator->current()->getTexto();
                $html = <<<EOS

                <div class = "cajaCita">
                    <div class="noticia">
                        <h5>$fecha</h5>
                        <h4><a href="#"> $titulo</a></h4>
                        <p>$texto</p>
                        <a href = "includes/Formularios/formModificaNoticia.php?data=$fecha"><button type = "submit" class="cambio">Modificar</button></a>
                        <a href = "includes/Formularios/formEliminaNoticia.php?data=$fecha"><button type = "submit" class="anular">Eliminar</button></a>
                    </div>
                </div>

EOS;
            echo $html;
            $iterator->next();
            }

        }



	}

?>