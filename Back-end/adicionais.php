<?php

class Adicionais {
    private $AdicionalID;
    private $TipoAdicionalID;
    private $LocacaoDevolucaoID;
    private $Situacao;

    public function getADICIONALID() {
        return $this->AdicionalID;
    }

    public function setADICIONALID($AdicionalID) {
        $this->AdicionalID = $AdicionalID;
    }

    public function getTIPOADICIONALID() {
        return $this->TipoAdicionalID;
    }

    public function setTIPOADICIONALID($TipoAdicionalID) {
        $this->TipoAdicionalID = $TipoAdicionalID;
    }

    public function getLOCACAODEVOLUCAOID() {
        return $this->LocacaoDevolucaoID;
    }

    public function setLOCACAODEVOLUCAOID($LocacaoDevolucaoID) {
        $this->LocacaoDevolucaoID = $LocacaoDevolucaoID;
    }

    public function getSITUACAO() {
        return $this->Situacao;
    }

    public function setSITUACAO($Situacao) {
        $this->Situacao = $Situacao;
    }
}

?>
