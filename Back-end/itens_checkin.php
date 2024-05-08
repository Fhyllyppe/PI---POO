<?php

class ItensCheckin{
    Private $ItemCheckinID;
    Private $Nome;
    Private $Situacao;

    public function getITEMCHECKINID(){
        return $this->ItemCheckinID;
    }
    public function setITEMCHECKINID($ItemCheckinID){
        $this->ItemCheckinID = $ItemCheckinID;
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
