<?php

class PlanosContas{
    Private $PlanoContaID;
    Private $Nome;
    Private $Codigo;
    Private $Tipo;
    Private $Situacao;

    public function __construct($PlanoContaID,$Nome,$Codigo,$Tipo,$Situacao){
        $this->PlanoContaID = $PlanoContaID;
        $this->Nome = $Nome;
        $this->Codigo = $Codigo;
        $this->Tipo = $Tipo;
        $this->Situacao = $Situacao;
    }

    public function getPLANOCONTAID(){
        return $this->PlanoContaID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function getCODIGO(){
        return $this->Codigo;
    }
    public function getTIPO(){
        return $this->Tipo;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
} 