<?php

class Log{
    Private $LogID;
    Private $Tabela;
    Private $Chave;
    Private $DataHora;
    Private $FuncionarioID;
    Private $TipoAlteracao;

    public function getLOGID(){
        return $this->LogID;
    }
    public function setLOGID($LogID){
        $this->LogID = $LogID;
    }
    public function getTABELA(){
        return $this->Tabela;
    }
    public function setTABELA($Tabela){
        $this->Tabela = $Tabela;
    }
    public function getCHAVE(){
        return $this->Chave;
    }
    public function setCHAVE($Chave){
        $this->Chave = $Chave;
    }
    public function getDATAHORA(){
        return $this->DataHora;
    }
    public function setDATAHORA($DataHora){
        $this->DataHora = $DataHora;
    }
    public function getFUNCIONARIOID(){
        return $this->FuncionarioID;
    }
    public function setFUNCIONARIOID($FuncionarioID){
        $this->FuncionarioID = $FuncionarioID;
    }  
    public function getTIPOALTERACAO(){
        return $this->TipoAlteracao;
    }
    public function setTIPOALTERACAO($TipoAlteracao){
        $this->TipoAlteracao = $TipoAlteracao;
    }  
        
}
?> 
