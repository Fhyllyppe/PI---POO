<?php

class ItensCheckinLocacaoDevolucao{
    Private $LocacaoDevolucaoCheckinID;
    Private $ItemCheckinID;
    Private $LocacaoDevolucaoID;
    Private $Situacao;
    Private $Observacao;

    public function __construct($LocacaoDevolucaoCheckinID,$ItemCheckinID,$TipoAdicionalID,$LocacaoDevolucaoID,$Situacao,$Observacao){
        $this->LocacaoDevolucaoCheckinID = $LocacaoDevolucaoCheckinID;
        $this->ItemCheckinID = $ItemCheckinID;
        $this->LocacaoDevolucaoID = $LocacaoDevolucaoID;
        $this->Situacao = $Situacao;
        $this->Observacao = $Situacao;
    }

    public function getLOCACAODEVOLUCAOCHECKINID(){
        return $this->LocacaoDevolucaoCheckinID;
    }
    public function getITEMCHECKINID(){
        return $this->ItemCheckinID;
    }
    public function getLOCACAODEVOLUCAOID(){
        return $this->LocacaoDevolucaoID;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
    public function getOBSERVACAO(){
        return $this->Observacao;
    }
} 