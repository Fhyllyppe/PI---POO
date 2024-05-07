<?php

class ContasReceber {
    private $contasaReceberID;
    private $valor;
    private $dataVencimento;
    private $descricao;

    public function __construct($contasaReceberID, $valor, $dataVencimento, $descricao) {
        $this->id = $contasaReceberID;
        $this->valor = $valor;
        $this->dataVencimento = $dataVencimento;
        $this->descricao = $descricao;
    }

    public function getCONTASARECEBERID() {
        return $this->ContasaReceberID;
    }

    public function getVALOR() {
        return $this->valor;
    }

    public function getDATAVENCIMENTO() {
        return $this->dataVencimento;
    }

    public function getDESCRICAO() {
        return $this->descricao;
    }

}
?>
