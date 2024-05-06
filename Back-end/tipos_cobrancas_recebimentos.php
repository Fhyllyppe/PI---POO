<?php

class TiposCobrancasRecebimentos{
    Private $TipoCobrancaRecebimentoID;
    Private $Nome;
    Private $Situacao;

    public function __construct($TipoCobrancaRecebimentoID,$Nome,$Situacao){
        $this->TipoCobrancaRecebimentoID = $TipoCobrancaRecebimentoID;
        $this->Nome = $Nome;
        $this->Situacao = $Situacao;
    }

    public function getTIPOCOBRANCARECEBIMENTOID(){
        return $this->TipoCobrancaRecebimentoID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
} 