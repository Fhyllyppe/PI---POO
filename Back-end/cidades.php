<?php

class Cidades{
    Private $CidadeID;
    Private $Nome;
    Private $EstadoID;

    public function __construct($CidadeID, $Nome, $EstadoID){
        $this->CidadeID = $CidadeID;
        $this->Nome = $Nome;
        $this->EstadoID = $EstadoID;
    }

    public function getCIDADEID(){
        return $this->CidadeID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function getESTADOID(){
        return $this->EstadoID;
    }
} 
   