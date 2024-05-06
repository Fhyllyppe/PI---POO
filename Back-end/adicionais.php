<?php

class Adicionais{
    Private $AdicionalID;
    Private $TipoAdicionalID;
    Private $LocacaoDevolucaoID;
    Private $Situacao;

    public function __construct($AdicionalID,$TipoAdicionalID,$LocacaoDevolucaoID,$Situacao){
        $this->AdicionalID = $AdicionalID;
        $this->TipoAdicionalID = $TipoAdicionalID;
        $this->LocacaoDevolucaoID = $LocacaoDevolucaoID;
        $this->Situacao = $Situacao;
    }

    public function getADICIONALID(){
        return $this->AdicionalID;
    }
    public function getTIPOADICIONALID(){
        return $this->TipoAdicionalID;
    }
    public function getLOCACAODEVOLUCAOID(){
        return $this->LocacaoDevolucaoID;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
} 