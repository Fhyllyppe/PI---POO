<?php

class Cidades {
    private $EstadoID;
    private $Nome;
    private $UF;

    public function getUF() {
        return $this->UF;
    }

    public function setUF($UF) {
        $this->UF = $UF;
    }

    public function getNOME() {
        return $this->Nome;
    }

    public function setNOME($Nome) {
        $this->Nome = $Nome;
    }

    public function getESTADOID() {
        return $this->EstadoID;
    }

    public function setESTADOID($EstadoID) {
        $this->EstadoID = $EstadoID;
    }
}
