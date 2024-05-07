<?php

class TiposCobrancasRecebimentos {
    private $TipoCobrancaRecebimentoID;
    private $Nome;
    private $Situacao;

    public function getTIPOCOBRANCARECEBIMENTOID() {
        return $this->TipoCobrancaRecebimentoID;
    }

    public function setTIPOCOBRANCARECEBIMENTOID($TipoCobrancaRecebimentoID) {
        $this->TipoCobrancaRecebimentoID = $TipoCobrancaRecebimentoID;
    }

    public function getNOME() {
        return $this->Nome;
    }

    public function setNOME($Nome) {
        $this->Nome = $Nome;
    }

    public function getSITUACAO() {
        return $this->Situacao;
    }

    public function setSITUACAO($Situacao) {
        $this->Situacao = $Situacao;
    }
}
?>
