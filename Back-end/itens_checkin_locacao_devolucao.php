<?php

class ItensCheckinLocacaoDevolucao {
    private $LocacaoDevolucaoCheckinID;
    private $ItemCheckinID;
    private $LocacaoDevolucaoID;
    private $Situacao;
    private $Observacao;

    public function getLOCACAODEVOLUCAOCHECKINID() {
        return $this->LocacaoDevolucaoCheckinID;
    }

    public function setLOCACAODEVOLUCAOCHECKINID($LocacaoDevolucaoCheckinID) {
        $this->LocacaoDevolucaoCheckinID = $LocacaoDevolucaoCheckinID;
    }

    public function getITEMCHECKINID() {
        return $this->ItemCheckinID;
    }

    public function setITEMCHECKINID($ItemCheckinID) {
        $this->ItemCheckinID = $ItemCheckinID;
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

    public function getOBSERVACAO() {
        return $this->Observacao;
    }

    public function setOBSERVACAO($Observacao) {
        $this->Observacao = $Observacao;
    }
}
?>
