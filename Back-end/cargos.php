<?php

class Cargos{
    Private $CargoID;
    Private $Nome;
    Private $SalarioBase;
    Private $Situacao;

    public function __construct($CargoID,$Nome,$SalarioBase,$Situacao){
        $this->CargoID = $CargoID;
        $this->Nome = $Nome;
        $this->SalarioBase = $SalarioBase;
        $this->Situacao = $Situacao;
    }

    public function getCARGOID(){
        return $this->CargoID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function getSALARIOBASE(){
        return $this->SalarioBase;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
} 