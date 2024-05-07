<?php
class ContasPagar {
    private $ContasaPagarID;
    private $valor;
    private $dataVencimento;
    private $descricao;

    public function __construct($ContasaPagarID, $valor, $dataVencimento, $descricao) {
        $this->ContasaPagarID = $ContasaPagarID;
        $this->valor = $valor;
        $this->dataVencimento = $dataVencimento;
        $this->descricao = $descricao;
    }

    public function getCONTASAPAGARID() {
        return $this->ContasaPagarID;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getDataVencimento() {
        return $this->dataVencimento;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}
?>
