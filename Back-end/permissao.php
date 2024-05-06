<?php

class Permissao{
    Private $PermissaoID;
    Private $Permissao;
    
    public function __construct($PermissaoID,$Permissao){
        $this->PermissaoID = $PermissaoID;
        $this->Permissao = $Permissao;        
    }

    public function getPERMISSAOID(){
        return $this->PermissaoID;
    }
    public function getPERMISSAO(){
        return $this->Permissao;
    }
    
} 