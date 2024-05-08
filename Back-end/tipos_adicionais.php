<?php

class TiposAdicionais{
    Private $TipoAdicionalID;
    Private $Nome;
    Private $Descricao;
    Private $Valor;
    Private $Situacao;

    public function getTIPOADICIONALID(){
        return $this->TipoAdicionalID;
    }
    public function setTIPOADICIONALID($TipoAdicionalID){
        $this->TipoAdicionalID = $TipoAdicionalID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function setNOME($Nome){
        $this->Nome = $Nome;
    }
    public function getDESCRICAO(){
        return $this->Descricao;
    }
    public function setDESCRICAO($Descricao){
        $this->Descricao = $Descricao;
    }
    public function getVALOR(){
        return $this->Valor;
    }
    public function setVALOR($Valor){
        $this->Valor = $Valor;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
    public function setSITUACAO($Situacao){
        $this->Situacao = $Situacao;
    }  
        
}
?> 
