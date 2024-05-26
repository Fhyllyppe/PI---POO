<?php
class Cargos {
    private $CargoID;
    private $Nome;
    private $SalarioBase;
    private $Situacao;

    public function getCARGOID() {
        return $this->CargoID;
    }

    public function setCARGOID($CargoID) {
        $this->CargoID = $CargoID;
    }

    public function getNOME() {
        return $this->Nome;
    }

    public function setNOME($Nome) {
        $this->Nome = $Nome;
    }

    public function getSALARIOBASE() {
        return $this->SalarioBase;
    }

    public function setSALARIOBASE($SalarioBase) {
        $this->SalarioBase = $SalarioBase;
    }

    public function getSITUACAO() {
        return $this->Situacao;
    }

    public function setSITUACAO($Situacao) {
        $this->Situacao = $Situacao;
    }
}

