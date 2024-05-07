<?php

class CobrancasExtrasLocacaoDevolucao{
    Private $CobrancaExtraID;
    Private $TipoCobrancaExtraID;
    Private $LocacaoDevolucaoID;
    Private $Situacao;

    public function getCOBRANCAEXTRAID(){
        return $this->CobrancaExtraID;
    }
    public function setCOBRANCAEXTRAID($CobrancaExtraID){
        $this->CobrancaExtraID = $CobrancaExtraID;
    }
    public function getTIPOCOBRANCAEXTRAID(){
        return $this->TipoCobrancaExtraID;
    }
    public function setTIPOCOBRANCAEXTRAID($TipoCobrancaExtraID){
        $this->TipoCobrancaExtraID = $TipoCobrancaExtraID;
    }
    public function getLOCACAODEVOLUCAOID(){
        return $this->LocacaoDevolucaoID;
    }
    public function setLOCACAODEVOLUCAOID($LocacaoDevolucaoID){
        $this->LocacaoDevolucaoID = $LocacaoDevolucaoID;
    }    
    public function getSITUACAO(){
        return $this->Situacao;
    }
    public function setSITUACAO($Situacao){
        $this->Situacao = $Situacao;
    }
}
?> 
