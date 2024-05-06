<?php

class Clientes{
    Private $ClienteID; 
    Private $Nome; 
    Private $RazaoSocial;
    Private $CPF; 
    Private $RG; 
    Private $DataNascimento; 
    Private $Sexo; 
    Private $Email; 
    Private $Telefone; 
    Private $Celular; 
    Private $Rua; 
    Private $CEP; 
    Private $CidadeID; 
    Private $NumeroCNH; 
    Private $NumeroRegistroCNH; 
    Private $ValidadeCNH; 
    Private $CategoriaCNH; 
    Private $Observacao; 
    Private $Situacao; 
    Private $CNPJ; 
    Private $InscricaoMunicipal; 
    Private $InscricaoEstadual; 
    Private $TipoPessoa; 
    Private $Senha;

    public function __construct($ClienteID,$Nome,$RazaoSocial,$CPF,$RG,$DataNascimento,$Sexo,$Email,$Telefone,$Celular,$Rua,$CEP,$CidadeID,$NumeroCNH,$NumeroRegistroCNH,$ValidadeCNH,$CategoriaCNH,$Observacao,$Situacao,$CNPJ,$InscricaoMunicipal,$InscricaoEstadual,$TipoPessoa,$Senha)
    {
        $this->ClienteID = $ClienteID;
        $this->Nome = $Nome;
        $this->RazaoSocial = $RazaoSocial;
        $this->CPF = $CPF;
        $this->RG = $RG;
        $this->DataNascimento = $DataNascimento;
        $this->Sexo = $Sexo;
        $this->Email = $Email;
        $this->Telefone = $Telefone;
        $this->Celular = $Celular;
        $this->Rua = $Rua;
        $this->CEP = $CEP;
        $this->CidadeID = $CidadeID;
        $this->NumeroCNH = $NumeroCNH;
        $this->NumeroRegistroCNH = $NumeroRegistroCNH;
        $this->ValidadeCNH = $ValidadeCNH;
        $this->CategoriaCNH = $CategoriaCNH;
        $this->Observacao = $Observacao;
        $this->Situacao = $Situacao;
        $this->CNPJ = $CNPJ;
        $this->InscricaoMunicipal = $InscricaoMunicipal;
        $this->InscricaoEstadual = $InscricaoEstadual;
        $this->TipoPessoa = $TipoPessoa;
        $this->Senha = $Senha;
    }

    public function getCLIENTEID(){
        return $this->ClienteID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function getRAZAOSOCIAL(){
        return $this->RazaoSocial;
    }
    public function getCpf(){
        return $this->CPF;
    }
    public function getRg(){
        return $this->RG;
    }
    public function getDATANASCIMENTO(){
        return $this->DataNascimento;
    }
    public function getSEXO(){
        return $this->Sexo;
    }
    public function getEMAIL(){
        return $this->Email;
    }
    public function getTELEFONE(){
        return $this->Telefone;
    }
    public function getCELULAR(){
        return $this->Celular;
    }
    public function getRUA(){
        return $this->Rua;
    }
    public function getCep(){
        return $this->CEP;
    }
    public function getCIDADEID(){
        return $this->CidadeID;
    }
    public function getNUMEROCNH(){
        return $this->NumeroCNH;
    }
    public function getNUMEROREGISTROCNH(){
        return $this->NumeroRegistroCNH;
    }
    public function getVALIDADECNH(){
        return $this->ValidadeCNH;
    }
    public function getCATEGORIACNH(){
        return $this->CategoriaCNH;
    }
    public function getOBSERVACAO(){
        return $this->Observacao;
    }
    public function getSITUACAO(){
        return $this->Situacao;
    }
    public function getCnpj(){
        return $this->CNPJ;
    }
    public function getINSCRICAOMUNICIPAL(){
        return $this->InscricaoMunicipal;
    }
    public function getINSCRICAOESTADUAL(){
        return $this->InscricaoEstadual;
    }
    public function getTIPOPESSOA(){
        return $this->TipoPessoa;
    }
    public function getSENHA(){
        return $this->Senha;
    }
    
}    