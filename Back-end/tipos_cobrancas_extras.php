<?php

class TiposCobrancasExtras{
    Private $TipoCobrancaExtraID;
    Private $Nome;
    Private $Descricao;
    Private $Valor;
    Private $Situacao;

    public function __construct($TipoCobrancaExtraID,$Nome,$Descricao,$Valor,$Situacao){
        $this->TipoCobrancaExtraID = $TipoCobrancaExtraID;
        $this->Nome = $Nome;
        $this->Descricao = $Descricao;
        $this->Valor = $Valor;
        $this->Situacao = $Situacao;
    }

    public function getTIPOCOBRANCAEXTRAID(){
        return $this->TipoCobrancaExtraID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function getDESCRICAO(){
        return $this->Descricao;
    }
    public function getVALOR(){
        return $this->Valor;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
} 