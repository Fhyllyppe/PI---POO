<?php

class Estados{
    Private $EstadoID;
    Private $Nome;
    Private $UF;

    public function getUf(){
        return $this->UF;
    }
    public function setUf($UF){
        $this->UF = $UF;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function setNOME($Nome){
        $this->Nome = $Nome;
    }
    public function getESTADOID(){
        return $this->EstadoID;
    }
    public function setESTADOID($EstadoID){
        $this->EstadoID = $EstadoID;
    }
}
?> 
