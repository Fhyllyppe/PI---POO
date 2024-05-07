<?php

class ContasPagar{
    Private $ContaPagarID; 
    Private $Valor;
    Private $DataVencimento;
    Private $Desconto;
    Private $Juros;
    Private $DataPagamento;
    Private $ValorPago;
    Private $Situacao;
    Private $FornecedorID;
    Private $FuncionarioID;
    Private $PlanoContaID;
    Private $TipoCobrancaRecebimentoID;
    Private $Observacao;

    public function getCONTAPAGARID(){
        return $this->ContaPagarID;
    }
    public function setCONTAPAGARID($ContaPagarID){
        $this->ContaPagarID = $ContaPagarID;
    }
    public function getVALOR(){
        return $this->Valor;
    }
    public function setVALOR($Valor){
        $this->Valor = $Valor;
    }
    public function getDATAVENCIMENTO(){
        return $this->DataVencimento;
    }
    public function setDATAVENCIMENTO($DataVencimento){
        $this->DataVencimento = $DataVencimento;
    }    
    public function getDESCONTO(){
        return $this->Desconto;
    }
    public function setDESCONTO($Desconto){
        $this->Desconto = $Desconto;
    }
    public function getJUROS(){
        return $this->Juros;
    }
    public function setJUROS($Juros){
        $this->Juros = $Juros;
    }
    public function getDATAPAGAMENTO(){
        return $this->DataPagamento;
    }
    public function setDATAPAGAMENTO($DataPagamento){
        $this->DataPagamento = $DataPagamento;
    }
    public function getVALORPAGO(){
        return $this->ValorPago;
    }
    public function setVALORPAGO($ValorPago){
        $this->ValorPago = $ValorPago;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
    public function setSITUACAO($Situacao){
        $this->Situacao = $Situacao;
    }
    public function getFORNECEDORID(){
        return $this->FornecedorID;
    }
    public function setFORNECEDORID($FornecedorID){
        $this->FornecedorID = $FornecedorID;
    }
    public function getFUNCIONARIOID(){
        return $this->FuncionarioID;
    }
    public function setFUNCIONARIOID($FuncionarioID){
        $this->FuncionarioID = $FuncionarioID;
    }
    public function getPLANOCONTAID(){
        return $this->PlanoContaID;
    }
    public function setPLANOCONTAID($PlanoContaID){
        $this->PlanoContaID = $PlanoContaID;
    }
    public function getTIPOCOBRANCARECEBIMENTOID(){
        return $this->TipoCobrancaRecebimentoID;
    }
    public function setTIPOCOBRANCARECEBIMENTOID($TipoCobrancaRecebimentoID){
        $this->TipoCobrancaRecebimentoID = $TipoCobrancaRecebimentoID;
    }
    public function getOBSERVACAO(){
        return $this->Observacao;
    }
    public function setOBERVACAO($Observacao){
        $this->Observacao = $Observacao;
    }
}
?> 
