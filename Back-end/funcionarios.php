<?php

class Funcionarios {
    private $FuncionarioID;
    private $Nome;
    private $CPF;
    private $RG;
    private $DataNascimento;
    private $Sexo;
    private $Email;
    private $Telefone;
    private $Celular;
    private $Rua;
    private $Numero;
    private $Complemento;
    private $Bairro;
    private $CidadeID;
    private $CEP;
    private $NumeroCTPS;
    private $Pis;
    private $Salario;
    private $DataAdmissao;
    private $DataDemissao;
    private $CargoID;
    private $LOGIN_;
    private $Senha;
    private $Situacao;
    private $NumeroCNH;
    private $NumeroRegistroCNH;
    private $ValidadeCNH;
    private $CategoriaCNH;
    private $Observacao;
    private $TipoUser;

    public function getFUNCIONARIOID() {
        return $this->FuncionarioID;
    }

    public function setFUNCIONARIOID($FuncionarioID) {
        $this->FuncionarioID = $FuncionarioID;
    }
    public function getNOME() {
        return $this->Nome;
    }

    public function setNOME($Nome) {
        $this->Nome = $Nome;
    }
    public function getCpf() {
        return $this->CPF;
    }

    public function setCpf($CPF) {
        $this->CPF = $CPF;
    }
    public function getRg() {
        return $this->RG;
    }

    public function setRg($RG) {
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
    public function getCep() {
        return $this->CEP;
    }

    public function setCep($CEP) {
        $this->CEP = $CEP;
    }
    public function getNUMEROCTPS() {
        return $this->NumeroCTPS;
    }

    public function setNUMEROCTPS($NumeroCTPS) {
        $this->NumeroCTPS = $NumeroCTPS;
    }
    public function getPIS() {
        return $this->Pis;
    }

    public function setPIS($Pis) {
        $this->Pis = $Pis;
    }
    public function getSALARIO() {
        return $this->Salario;
    }

    public function setSALARIO($Salario) {
        $this->Salario = $Salario;
    }
    public function getDATAADMISSAO() {
        return $this->DataAdmissao;
    }

    public function setDATAADMISSAO($DataAdmissao) {
        $this->DataAdmissao = $DataAdmissao;
    }
    public function getDATADEMISSAO() {
        return $this->DataDemissao;
    }

    public function setDATADEMISSAO($DataDemissao) {
        $this->DataDemissao = $DataDemissao;
    }
    public function getCARGOID() {
        return $this->CargoID;
    }

    public function setCARGOID($CargoID) {
        $this->CargoID = $CargoID;
    }
    public function getLogin_() {
        return $this->LOGIN_;
    }

    public function setLogin_($LOGIN_) {
        $this->LOGIN_ = $LOGIN_;
    }
    public function getSENHA() {
        return $this->Senha;
    }

    public function setSENHA($Senha) {
        $this->Senha = $Senha;
    }
    public function getSITUACAO() {
        return $this->Situacao;
    }

    public function setSITUACAO($Situacao) {
        $this->Situacao = $Situacao;
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
    public function getTIPOUSER() {
        return $this->TipoUser;
    }

    public function setTIPOUSER($TipoUser) {
        $this->TipoUser = $TipoUser;
    }
     
}
?> 
