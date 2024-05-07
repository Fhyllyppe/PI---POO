<?php

class Fornecedores {
    private $FornecedorID;
    private $NomeFantasia;
    private $RazaoSocial;
    private $CPF;
    private $InscricaoMunicipal;
    private $InscricaoEstadual;
    private $Rua;
    private $Numero;
    private $Complemento;
    private $Bairro;
    private $CidadeID;
    private $CEP;
    private $Email;
    private $Telefone;
    private $Fax;
    private $Celular;
    private $TipoFornecedorID;
    private $Situacao;
    private $CNPJ;
    private $RG;
    private $TipoPessoa;
    private $Observacao;

    public function getFORNECEDORID() {
        return $this->FornecedorID;
    }

    public function setFORNECEDORID($FornecedorID) {
        $this->FornecedorID = $FornecedorID;
    }

    public function getNOMEFANTASIA() {
        return $this->NomeFantasia;
    }

    public function setNOMEFANTASIA($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }

    public function getRAZAOSOCIAL() {
        return $this->RazaoSocial;
    }

    public function setRAZAOSOCIAL($RazaoSocial) {
        $this->RazaoSocial = $RazaoSocial;
    }

    public function getCPF() {
        return $this->CPF;
    }

    public function setCPF($CPF) {
        $this->CPF = $CPF;
    }
    public function getINSCRICAOMUNICIPAL() {
        return $this->InscricaoMunicipal;
    }

    public function setINSCRICAOMUNICIPAL($InscricaoMunicipal) {
        $this->InscricaoMunicipal = $InscricaoMunicipal;
    }

    public function getINSCRICAOESTADUAL() {
        return $this->InscricaoEstadual;
    }

    public function setINSCRICAOESTADUAL($InscricaoEstadual) {
        $this->InscricaoEstadual = $InscricaoEstadual;
    }
    public function getRUA() {
        return $this->Rua;
    }

    public function setRUA($Rua) {
        $this->Rua = $Rua;
    }
    public function getNUMERO() {
        return $this->Numero;
    }

    public function setNUMERO($Numero) {
        $this->Numero = $Numero;
    }
    public function getCOMPLEMENTO() {
        return $this->Complemento;
    }

    public function setCOMPLEMENTO($Complemento) {
        $this->Complemento = $Complemento;
    }
    public function getBAIRRO() {
        return $this->Bairro;
    }

    public function setBAIRRO($Bairro) {
        $this->Bairro = $Bairro;
    }
    public function getCIDADEID() {
        return $this->CidadeID;
    }

    public function setCIDADEID($CidadeID) {
        $this->CidadeID = $CidadeID;
    }
    public function getCEP() {
        return $this->CEP;
    }

    public function setCEP($CEP) {
        $this->CEP = $CEP;
    }
    public function getEMAIL() {
        return $this->Email;
    }

    public function setEMAIL($Email) {
        $this->Email = $Email;
    }

    public function getTELEFONE() {
        return $this->Telefone;
    }

    public function setTELEFONE($Telefone) {
        $this->Telefone = $Telefone;
    }
    public function getFAX() {
        return $this->Fax;
    }

    public function setFAX($Fax) {
        $this->Fax = $Fax;
    }
    public function getCELULAR() {
        return $this->Celular;
    }

    public function setCELULAR($Celular) {
        $this->Celular = $Celular;
    }
    public function getTIPOFORNECEDORID() {
        return $this->TipoFornecedorID;
    }

    public function setTIPOFORNECEDORID($TipoFornecedorID) {
        $this->TipoFornecedorID = $TipoFornecedorID;
    }
    public function getSITUACAO() {
        return $this->Situacao;
    }

    public function setSITUACAO($Situacao) {
        $this->Situacao = $Situacao;
    }

    public function getCNPJ() {
        return $this->CNPJ;
    }

    public function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    public function getRG() {
        return $this->RG;
    }

    public function setRG($RG) {
        $this->RG = $RG;
    }
    public function getTIPOPESSOA() {
        return $this->TipoPessoa;
    }

    public function setTIPOPESSOA($TipoPessoa) {
        $this->TipoPessoa = $TipoPessoa;
    }
    public function getOBSERVACAO() {
        return $this->Observacao;
    }

    public function setOBSERVACAO($Observacao) {
        $this->Observacao = $Observacao;
    }    
}
?>  
