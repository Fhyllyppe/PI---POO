<?php
class TiposCobrancasExtras {
    private $TipoCobrancaExtraID;
    private $Nome;
    private $Descricao;
    private $Valor;
    private $Situacao;

    public function getTIPOCOBRANCAEXTRAID() {
        return $this->TipoCobrancaExtraID;
    }

    public function setTIPOCOBRANCAEXTRAID($TipoCobrancaExtraID) {
        $this->TipoCobrancaExtraID = $TipoCobrancaExtraID;
    }

    public function getNOME() {
        return $this->Nome;
    }

    public function setNOME($Nome) {
        $this->Nome = $Nome;
    }

    public function getDESCRICAO() {
        return $this->Descricao;
    }

    public function setDESCRICAO($Descricao) {
        $this->Descricao = $Descricao;
    }

    public function getVALOR() {
        return $this->Valor;
    }

    public function setVALOR($Valor) {
        $this->Valor = $Valor;
    }

    public function getSITUACAO() {
        return $this->Situacao;
    }

    public function setSITUACAO($Situacao) {
        $this->Situacao = $Situacao;
    }
}
?>
