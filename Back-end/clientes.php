<?php

class Clientes {
    private $ClienteID;
    private $Nome;
    private $RazaoSocial;
    private $CPF;
    private $RG;
    private $DataNascimento;
    private $Sexo;
    private $Email;
    private $Telefone;
    private $Celular;
    private $Rua;
    private $CEP;
    private $CidadeID;
    private $NumeroCNH;
    private $NumeroRegistroCNH;
    private $ValidadeCNH;
    private $CategoriaCNH;
    private $Observacao;
    private $Situacao;
    private $CNPJ;
    private $InscricaoMunicipal;
    private $InscricaoEstadual;
    private $TipoPessoa;
    private $Senha;

    public function getCLIENTEID() {
        return $this->ClienteID;
    }

    public function setCLIENTEID($ClienteID) {
        $this->ClienteID = $ClienteID;
    }

    public function getNOME() {
        return $this->Nome;
    }

    public function setNOME($Nome) {
        $this->Nome = $Nome;
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

    public function getRG() {
        return $this->RG;
    }

    public function setRG($RG) {
        $this->RG = $RG;
    }

    public function getDATANASCIMENTO() {
        return $this->DataNascimento;
    }

    public function setDATANASCIMENTO($DataNascimento) {
        $this->DataNascimento = $DataNascimento;
    }

    public function getSEXO() {
        return $this->Sexo;
    }

    public function setSEXO($Sexo) {
        $this->Sexo = $Sexo;
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

    public function getCELULAR() {
        return $this->Celular;
    }

    public function setCELULAR($Celular) {
        $this->Celular = $Celular;
    }

    public function getRUA() {
        return $this->Rua;
    }

    public function setRUA($Rua) {
        $this->Rua = $Rua;
    }

    public function getCEP() {
        return $this->CEP;
    }

    public function setCEP($CEP) {
        $this->CEP = $CEP;
    }

    public function getCIDADEID() {
        return $this->CidadeID;
    }

    public function setCIDADEID($CidadeID) {
        $this->CidadeID = $CidadeID;
    }

    public function getNUMEROCNH() {
        return $this->NumeroCNH;
    }

    public function setNUMEROCNH($NumeroCNH) {
        $this->NumeroCNH = $NumeroCNH;
    }

    public function getNUMEROREGISTROCNH() {
        return $this->NumeroRegistroCNH;
    }

    public function setNUMEROREGISTROCNH($NumeroRegistroCNH) {
        $this->NumeroRegistroCNH = $NumeroRegistroCNH;
    }

    public function getVALIDADECNH() {
        return $this->ValidadeCNH;
    }

    public function setVALIDADECNH($ValidadeCNH) {
        $this->ValidadeCNH = $ValidadeCNH;
    }

    public function getCATEGORIACNH() {
        return $this->CategoriaCNH;
    }

    public function setCATEGORIACNH($CategoriaCNH) {
        $this->CategoriaCNH = $CategoriaCNH;
    }

    public function getOBSERVACAO() {
        return $this->Observacao;
    }

    public function setOBSERVACAO($Observacao) {
        $this->Observacao = $Observacao;
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

    public function getTIPOPESSOA() {
        return $this->TipoPessoa;
    }

    public function setTIPOPESSOA($TipoPessoa) {
        $this->TipoPessoa = $TipoPessoa;
    }

    public function getSENHA() {
        return $this->Senha;
    }

    public function setSENHA($Senha) {
        $this->Senha = $Senha;
    }
}
?>
