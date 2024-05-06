<?php

class FuncionarioPermissao{
    Private $FuncionarioPermissaoID;
    Private $PermissaoID;
    Private $FuncionarioID;

    public function __construct($FuncionarioPermissaoID,$PermissaoID,$FuncionarioID){
        $this->FuncionarioPermissaoID = $FuncionarioPermissaoID;
        $this->PermissaoID = $PermissaoID;
        $this->FuncionarioID = $FuncionarioID;
    }

    public function getFUNCIONARIOPERMISSAOID(){
        return $this->FuncionarioPermissaoID;
    }
    public function getPERMISSAOID(){
        return $this->PermissaoID;
    }
    public function getFUNCIONARIOID(){
        return $this->FuncionarioID;
    }
} 