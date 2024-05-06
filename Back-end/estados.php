<?php

class Cidades{
    Private $EstadoID;
    Private $Nome;
    Private $UF;

    public function __construct($UF, $Nome, $EstadoID){
        $this->UF = $UF;
        $this->Nome = $Nome;
        $this->EstadoID = $EstadoID;
    }

    public function getUf(){
        return $this->UF;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function getESTADOID(){
        return $this->EstadoID;
    }
} 