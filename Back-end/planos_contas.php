<?php

class PlanosContas {
    private $PlanoContaID;
    private $Nome;
    private $Codigo;
    private $Tipo;
    private $Situacao;

    public function getPLANOCONTAID() {
        return $this->PlanoContaID;
    }

    public function setPLANOCONTAID($PlanoContaID) {
        $this->PlanoContaID = $PlanoContaID;
    }

    public function getNOME() {
        return $this->Nome;
    }

    public function setNOME($Nome) {
        $this->Nome = $Nome;
    }

    public function getCODIGO() {
        return $this->Codigo;
    }

    public function setCODIGO($Codigo) {
        $this->Codigo = $Codigo;
    }

    public function getTIPO() {
        return $this->Tipo;
    }

    public function setTIPO($Tipo) {
        $this->Tipo = $Tipo;
    }

    public function getSITUACAO() {
        return $this->Situacao;
    }

    public function setSITUACAO($Situacao) {
        $this->Situacao = $Situacao;
    }
}
?>
