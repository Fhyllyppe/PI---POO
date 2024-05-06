<?php

class CobrancasExtrasLocacaoDevolucao{
    Private $CobrancaExtraID;
    Private $TipoCobrancaExtraID;
    Private $LocacaoDevolucaoID;
    Private $Situacao;

    public function __construct($CobrancaExtraID,$TipoCobrancaExtraID,$LocacaoDevolucaoID,$Situacao){
        $this->CobrancaExtraID = $CobrancaExtraID;
        $this->TipoCobrancaExtraID = $TipoCobrancaExtraID;
        $this->LocacaoDevolucaoID = $LocacaoDevolucaoID;
        $this->Situacao = $Situacao;
    }

    public function getCOBRANCAEXTRAID(){
        return $this->CobrancaExtraID;
    }
    public function getTIPOCOBRANCAEXTRAID(){
        return $this->TipoCobrancaExtraID;
    }
    public function getLOCACAODEVOLUCAOID(){
        return $this->LocacaoDevolucaoID;
    }    
    public function getSITUACAO(){
        return $this->Situacao;
    }
} 