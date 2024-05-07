<?php
class Cidades {
    private $CidadeID;
    private $Nome;
    private $EstadoID;

    public function getCIDADEID() {
        return $this->CidadeID;
    }

    public function setCIDADEID($CidadeID) {
        $this->CidadeID = $CidadeID;
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
