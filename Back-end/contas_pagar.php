<?php
class ContasPagar {
    private $contasaPagarID;
    private $valor;
    private $dataVencimento;
    private $descricao;

    public function __construct($contasaPagarID,$valor,$dataVencimento,$descricao) {
        $this->ContasaPagarID = $contasaPagarID;
        $this->valor = $valor;
        $this->dataVencimento = $dataVencimento;
        $this->descricao = $descricao;
    }

    public function getCONTASAPAGARID() {
        return $this->contasaPagarID;
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
