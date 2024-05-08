<?php

class LocacoesDevolucoes{
    Private $LocacaoDevolucaoID;
    Private $ClienteID;
    Private $VeiculoID;
    Private $DataLocacao;
    Private $HoraLocacao;
    Private $DataPrevistaDevolucao;
    Private $HoraPrevistaDevolucao;
    Private $DataDevolucao;
    Private $HoraDevolucao;
    Private $FuncionarioID;
    Private $ValorTotal;
    Private $SeguroID;
    Private $QtdeDias;
    Private $KMDevolucao;

    public function getLOCACAODEVOLUCAOID(){
        return $this->LocacaoDevolucaoID;
    }
    public function setLOCACAODEVOLUCAOID($LocacaoDevolucaoID){
        $this->LocacaoDevolucaoID = $LocacaoDevolucaoID;
    }
    public function getCLIENTEID(){
        return $this->ClienteID;
    }
    public function setCLIENTEID($ClienteID){
        $this->ClienteID = $ClienteID;
    }
    public function getVEICULOID(){
        return $this->VeiculoID;
    }
    public function setVEICULOID($VeiculoID){
        $this->VeiculoID = $VeiculoID;
    }
    public function getDATALOCACAO(){
        return $this->DataLocacao;
    }
    public function setDATALOCACAO($DataLocacao){
        $this->DataLocacao = $DataLocacao;
    }  
    public function getHORALOCACAO(){
        return $this->HoraLocacao;
    }
    public function setHORALOCACAO($HoraLocacao){
        $this->HoraLocacao = $HoraLocacao;
    }  
    public function getDATAPREVISTADEVOLUCAO(){
        return $this->DataPrevistaDevolucao;
    }
    public function setDATAPREVISTADEVOLUCAO($DataPrevistaDevolucao){
        $this->DataPrevistaDevolucao = $DataPrevistaDevolucao;
    }  
    public function getHORAPREVISTADEVOLUCAO(){
        return $this->HoraPrevistaDevolucao;
    }
    public function setHORAPREVISTADEVOLUCAO($HoraPrevistaDevolucao){
        $this->HoraPrevistaDevolucao = $HoraPrevistaDevolucao;
    }  
    public function getDATADEVOLUCAO(){
        return $this->DataDevolucao;
    }
    public function setDATADEVOLUCAO($DataDevolucao){
        $this->DataDevolucao = $DataDevolucao;
    }  
    public function getHORADEVOLUCAO(){
        return $this->HoraDevolucao;
    }
    public function setHORADEVOLUCAO($HoraDevolucao){
        $this->HoraDevolucao = $HoraDevolucao;
    }  
    public function getFUNCIONARIOID(){
        return $this->FuncionarioID;
    }
    public function setFUNCIONARIOID($FuncionarioID){
        $this->FuncionarioID = $FuncionarioID;
    }  
    public function getVALORTOTAL(){
        return $this->ValorTotal;
    }
    public function setVALORTOTAL($ValorTotal){
        $this->ValorTotal = $ValorTotal;
    }  
    public function getSEGUROID(){
        return $this->SeguroID;
    }
    public function setSEGUROID($SeguroID){
        $this->SeguroID = $SeguroID;
    }  
    public function getQTDEDIAS(){
        return $this->QtdeDias;
    }
    public function setQTDEDIAS($QtdeDias){
        $this->QtdeDias = $QtdeDias;
    }  
    public function getKMDEVOLUCAO(){
        return $this->KMDevolucao;
    }
    public function setKMDEVOLUCAO($KMDevolucao){
        $this->KMDevolucao = $KMDevolucao;
    }      
    
}
?> 
