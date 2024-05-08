<?php

class TiposFornecedores{
    Private $TipoFornecedorID;
    Private $Nome;
    Private $Situacao;

    public function getTIPOFORNECEDORID(){
        return $this->TipoFornecedorID;
    }
    public function setTIPOFORNECEDORID($TipoFornecedorID){
        $this->TipoFornecedorID = $TipoFornecedorID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function setNOME($Nome){
        $this->Nome = $Nome;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
    public function setSITUACAO($Situacao){
        $this->Situacao = $Situacao;
    }  
        
}
?> 
