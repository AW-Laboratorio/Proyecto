<?php

namespace estatica\includes\ViewScripts;

use \estatica\includes\ModelScripts\GestorInformes as GI;
use \estatica\includes\ModelScripts\GestorPacientes as GP;
use \estatica\includes\ModelScripts\GestorMedicos as GM;

class InformesVista
{

    private $ListaInformes;

    public function __construct()
    {

        /*require_once '/../ModelScripts/GestorPacientes.php';*/
        //$this->ListaPacientes = new GestorPacientes();
        $ListaInformes = GI::GestorInformes();
    }

    public static function VistaInforme($idInforme)
    {
        $datosInforme = GI::seleccionarInforme($idInforme);   
        $idInforme    = $datosInforme->getidInforme();
        $Motivo       = $datosInforme->getMotivo();
        $Reacciones   = $datosInforme->getReacciones();
        $Rx           = $datosInforme->getRx();
        $Diagnostico  = $datosInforme->getDiagnostico();
        $Tratamiento  = $datosInforme->getTratamiento();
         $dni           = $datosInforme->getDni();




        $html = <<<EOS

                <div class = "alinearContenido">
                       <form>
                            <h1>Tus datos</h1>
                            <div class="datos">MOTIVO DE LA CONSULTA: $Motivo</div>
                            <div class="datos">REACCIONES ADVERSAS A MEDICAMENTOS: $Reacciones</div>
                            <div class="datos">Rx: $Rx</div>
                            <div class="datos">DIAGNÓSTICO: $Diagnostico</div>
                            <div class="datos">Tratamiento: $Tratamiento</div>

                        </form>
                    </div>
                </div>


EOS;
        echo $html;
    }
        public static function verInforme($afiliado, $idInforme){
            //Datos del paciente
            $paciente = GP::buscaPaciente($afiliado);
            $nombre = $paciente->getNombre();
            $apellidos = $paciente->getApellidos();
            $nif=$paciente->getDni();
            $fechaN=$paciente->getFechaN();
            $sexo=$paciente->getSexo();
            $telefono = $paciente->getTfno();
            $dir = $paciente->getDir();
            //Datos del informe
            $informe = GI::buscaInforme($idInforme);
            $numC = $informe->getNumColegiado();
            $motivo = $informe->getMotivo();
            $reacciones=$informe->getReacciones();
            $rx=$informe->getRx();
            $diagnostico=$informe->getDiagnostico();
            $tratamiento=$informe->getTratamiento();
            //Datos del medico
            $medico=GM::buscaMedico($numC);
            $nombreM=$medico->getNombre();
            $apellidosM=$medico->getApellidos();

            $html = <<<EOS

                    <div class="datosPaciente">
                        <h3>Datos Paciente</h3>
                        <div class="datos">
                            <h4>N.H.C: </h4><p>$afiliado</p>
                        </div>
                        <div class="datos">
                            <h4>Nombre y Apellidos: </h4><p>$nombre $apellidos</p>
                        </div>
                        <div class="datos">
                            <h4>NIF: </h4><p>$nif</p>
                        </div>
                        <div class="datos">
                            <h4>Fec.Nacimiento: </h4><p>$fechaN</p>
                        </div>
                        <div class="datos">
                            <h4>Sexo: </h4><p>$sexo</p>
                        </div>
                        <div class="datos">
                            <h4>Teléfonos: </h4><p>$telefono</p>
                        </div>
                        <div class="datos">
                            <h4>Dirección: </h4><p>$dir</p>
                        </div>
                        <h3>Comentario</h3>
                        <div class="comentario">
                            <div class= "datos">
                                <div><h4>Motivo de la consulta</h4></div>
                                <div><p>$motivo</p></div>
                            </div>
                            <div class= "datos">
                                <div><h4>Reacciones</h4></div>
                                <div><p>$reacciones</p></div>
                            </div>
                            <div class= "datos">
                                <div><h4>Pruebas</h4></div>
                                <div><p>$rx</p></div>
                            </div>
                            <div class= "datos">
                                <div><h4>Diagnóstico</h4></div>
                                <div><p>$diagnostico</p></div>
                            </div>
                        </div>
                        <h3>Tratamiento</h3>
                        <div class="tratamiento">
                            <div class= "datos">
                                <p>$tratamiento</p>
                            </div>
                        </div>
                        <h3>Médico Responsable</h3>
                        <div class="firma">
                            <div class="datos">
                                <h4>Autor/a del informe: </h4><p>$nombreM $apellidosM</p>
                            </div>
                            <div class="datos">
                                <h4>Número Colegiado: </h4><p>$numC</p>
                            </div>
                        </div>
                    </div>
                    <form action="informeMod.php" method="post">
                        <input type="text" id="numA" name="numA" value="$afiliado" hidden>
                        <input type="text" id="numC" name="numC" value="$numC" hidden>
                        <input type="text" id="motivo" name="motivo" value="$motivo" hidden>
                        <input type="text" id="rea" name="rea" value="$reacciones" hidden>
                        <input type="text" id="rx" name="rx" value="$rx" hidden>
                        <input type="text" id="diag" name="diag" value="$diagnostico" hidden>
                        <input type="text" id="trat" name="trat" value="$tratamiento" hidden>
                        <input type="text" id="idinf" name="idinf" value="$idInforme" hidden>
                        <button class="boton_enviar" type="submit">Modificar Informe</button>
                    </form>
EOS;
    echo $html;
        }

        public static function listaInformes(){
            $lista = GM::getListaInformes();
            $iterator = $lista->getIterator();

            while($iterator->valid()){

            $nombre = $paciente->current()->getNombre();
            $apellidos = $paciente->current()->getApellidos();
            $nif=$paciente->current()->current()->getDni();
            $fechaN=$paciente->current()->getFechaN();
            $sexo=$paciente->current()->getSexo();
            $telefono = $paciente->current()->getTfno();
            $dir = $paciente->current()->getDir();
            //Datos del informe
            $informe = GI::buscaInforme($idInforme);
            $numC = $informe->current()->getNumColegiado();
            $motivo = $informe->gcurrent()->etMotivo();
            $reacciones=$informe->current()->getReacciones();
            $rx=$informe->current()->getRx();
            $diagnostico=$informe->current()->getDiagnostico();
            $tratamiento=$informe->current()->getTratamiento();
            //Datos del medico
            $medico=GM::buscaMedico($numC);
            $nombreM=$medico->current()->getNombre();
            $apellidosM=$medico->current()->getApellidos();
            $html = <<<EOS

                <div class="datosPaciente">
                        <h3>Datos Paciente</h3>
                        <div class="datos">
                            <h4>N.H.C: </h4><p>$afiliado</p>
                        </div>
                        <div class="datos">
                            <h4>Nombre y Apellidos: </h4><p>$nombre $apellidos</p>
                        </div>
                        <div class="datos">
                            <h4>NIF: </h4><p>$nif</p>
                        </div>
                        <div class="datos">
                            <h4>Fec.Nacimiento: </h4><p>$fechaN</p>
                        </div>
                        <div class="datos">
                            <h4>Sexo: </h4><p>$sexo</p>
                        </div>
                        <div class="datos">
                            <h4>Teléfonos: </h4><p>$telefono</p>
                        </div>
                        <div class="datos">
                            <h4>Dirección: </h4><p>$dir</p>
                        </div>
                        <h3>Comentario</h3>
                        <div class="comentario">
                            <div class= "datos">
                                <div><h4>Motivo de la consulta</h4></div>
                                <div><p>$motivo</p></div>
                            </div>
                            <div class= "datos">
                                <div><h4>Reacciones</h4></div>
                                <div><p>$reacciones</p></div>
                            </div>
                            <div class= "datos">
                                <div><h4>Pruebas</h4></div>
                                <div><p>$rx</p></div>
                            </div>
                            <div class= "datos">
                                <div><h4>Diagnóstico</h4></div>
                                <div><p>$diagnostico</p></div>
                            </div>
                        </div>
                        <h3>Tratamiento</h3>
                        <div class="tratamiento">
                            <div class= "datos">
                                <p>$tratamiento</p>
                            </div>
                        </div>
                        <h3>Médico Responsable</h3>
                        <div class="firma">
                            <div class="datos">
                                <h4>Autor/a del informe: </h4><p>$nombreM $apellidosM</p>
                            </div>
                            <div class="datos">
                                <h4>Número Colegiado: </h4><p>$numC</p>
                            </div>
                        </div>
                    </div>
                    <form action="informeMod.php" method="post">
                        <input type="text" id="numA" name="numA" value="$afiliado" hidden>
                        <input type="text" id="numC" name="numC" value="$numC" hidden>
                        <input type="text" id="motivo" name="motivo" value="$motivo" hidden>
                        <input type="text" id="rea" name="rea" value="$reacciones" hidden>
                        <input type="text" id="rx" name="rx" value="$rx" hidden>
                        <input type="text" id="diag" name="diag" value="$diagnostico" hidden>
                        <input type="text" id="trat" name="trat" value="$tratamiento" hidden>
                        <input type="text" id="idinf" name="idinf" value="$idInforme" hidden>
                        <button class="boton_enviar" type="submit">Modificar Informe</button>
                    </form>
EOS;
            echo $html;
            $iterator->next();
        }

        }

        
    }
?>