<?php
namespace estatica\includes\ModelScripts;

class Informe
{

    private $idInforme;
    private $NumAfiliado;
    private $NumColegiado;
    private $Motivo;
    private $Reacciones;
    private $Rx;
    private $Diagnostico;
    private $Tratamiento;

    public function __construct($idInforme, $NumAfiliado, $NumColegiado, $Motivo, $Reacciones, $Rx, $Diagnostico, $Tratamiento)
    {

        $this->idInforme    = $idInforme;
        $this->NumAfiliado  = $NumAfiliado;
        $this->NumColegiado = $NumColegiado;
        $this->Motivo       = $Motivo;
        $this->Reacciones   = $Reacciones;
        $this->Rx           = $Rx;
        $this->Diagnostico  = $Diagnostico;
        $this->Tratamiento  = $Tratamiento;
    }

    /**
     * Gets the value of idInforme.
     *
     * @return mixed
     */
    public function getIdInforme()
    {
        return $this->idInforme;
    }

    /**
     * Sets the value of idInforme.
     *
     * @param mixed $idInforme the id informe
     *
     * @return self
     */
    private function _setIdInforme($idInforme)
    {
        $this->idInforme = $idInforme;

        return $this;
    }

    /**
     * Gets the value of NumAfiliado.
     *
     * @return mixed
     */
    public function getNumAfiliado()
    {
        return $this->NumAfiliado;
    }

    /**
     * Sets the value of NumAfiliado.
     *
     * @param mixed $NumAfiliado the num afiliado
     *
     * @return self
     */
    private function _setNumAfiliado($NumAfiliado)
    {
        $this->NumAfiliado = $NumAfiliado;

        return $this;
    }

    /**
     * Gets the value of NumColegiado.
     *
     * @return mixed
     */
    public function getNumColegiado()
    {
        return $this->NumColegiado;
    }

    /**
     * Sets the value of NumColegiado.
     *
     * @param mixed $NumColegiado the num colegiado
     *
     * @return self
     */
    private function _setNumColegiado($NumColegiado)
    {
        $this->NumColegiado = $NumColegiado;

        return $this;
    }

    /**
     * Gets the value of Motivo.
     *
     * @return mixed
     */
    public function getMotivo()
    {
        return $this->Motivo;
    }

    /**
     * Sets the value of Motivo.
     *
     * @param mixed $Motivo the motivo
     *
     * @return self
     */
    private function _setMotivo($Motivo)
    {
        $this->Motivo = $Motivo;

        return $this;
    }

    /**
     * Gets the value of Reacciones.
     *
     * @return mixed
     */
    public function getReacciones()
    {
        return $this->Reacciones;
    }

    /**
     * Sets the value of Reacciones.
     *
     * @param mixed $Reacciones the reacciones
     *
     * @return self
     */
    private function _setReacciones($Reacciones)
    {
        $this->Reacciones = $Reacciones;

        return $this;
    }

    /**
     * Gets the value of Rx.
     *
     * @return mixed
     */
    public function getRx()
    {
        return $this->Rx;
    }

    /**
     * Sets the value of Rx.
     *
     * @param mixed $Rx the rx
     *
     * @return self
     */
    private function _setRx($Rx)
    {
        $this->Rx = $Rx;

        return $this;
    }

    /**
     * Gets the value of Diagnostico.
     *
     * @return mixed
     */
    public function getDiagnostico()
    {
        return $this->Diagnostico;
    }

    /**
     * Sets the value of Diagnostico.
     *
     * @param mixed $Diagnostico the diagnostico
     *
     * @return self
     */
    private function _setDiagnostico($Diagnostico)
    {
        $this->Diagnostico = $Diagnostico;

        return $this;
    }

    /**
     * Gets the value of Tratamiento.
     *
     * @return mixed
     */
    public function getTratamiento()
    {
        return $this->Tratamiento;
    }

    /**
     * Sets the value of Tratamiento.
     *
     * @param mixed $Tratamiento the tratamiento
     *
     * @return self
     */
    private function _setTratamiento($Tratamiento)
    {
        $this->Tratamiento = $Tratamiento;

        return $this;
    }
}
