<?php

class Seguros{
    Private $SeguroID;
    Private $Nome;
    Private $Valor;
    Private $Descricao;
    Private $FornecedorID;
    Private $Situacao;

    public function getSEGUROID(){
        return $this->SeguroID;
    }
    public function setSEGUROID($SeguroID){
        $this->SeguroID = $SeguroID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function setNOME($Nome){
        $this->Nome = $Nome;
    }
    public function getVALOR(){
        return $this->Valor;
    }
    public function setVALOR($Valor){
        $this->Valor = $Valor;
    }
    public function getDESCRICAO(){
        return $this->Descricao;
    }
    public function setDESCRICAO($Descricao){
        $this->Descricao = $Descricao;
    }
    public function getFORNECEDORID(){
        return $this->FornecedorID;
    }
    public function setFORNECEDORID($FornecedorID){
        $this->FornecedorID = $FornecedorID;
    }  
    public function getSITUACAO(){
        return $this->Situacao;
    }
    public function setSITUACAO($Situacao){
        $this->Situacao = $Situacao;
    }  
        
}
?> 
