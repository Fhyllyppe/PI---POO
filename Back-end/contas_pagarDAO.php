<?php

class ContasPagarDAO{
    public function create (ContasPagar $ContasPagar) {
        $sql = 'INSERT INTO ContasPagar (Valor, DataVencimento, Desconto, Juros, DataPagamento, ValorPago, Situacao, FornecedorID, FuncionarioID, PlanoContaID, TipoCobrancaRecebimentoID, Observacao) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ContasPagar->getVALOR());
        $stmt->bindValue(2, $ContasPagar->getDATAVENCIMENTO());
        $stmt->bindValue(3, $ContasPagar->getDESCONTO());
        $stmt->bindValue(4, $ContasPagar->getJUROS());
        $stmt->bindValue(5, $ContasPagar->getDATAPAGAMENTO());
        $stmt->bindValue(6, $ContasPagar->getVALORPAGO());
        $stmt->bindValue(7, $ContasPagar->getSITUACAO());
        $stmt->bindValue(8, $ContasPagar->getFORNECEDORID());
        $stmt->bindValue(9, $ContasPagar->getFUNCIONARIOID());
        $stmt->bindValue(10, $ContasPagar->getPLANOCONTAID());
        $stmt->bindValue(11, $ContasPagar->getTIPOCOBRANCARECEBIMENTOID());
        $stmt->bindValue(12, $ContasPagar->getOBSERVACAO());


        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM ContasPagar';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(ContasPagar $ContasPagar) {
        $sql = 'UPDATE ContasPagar SET Valor = ?, DataVencimento = ?, Desconto = ?, Juros = ?, DataPagamento = ?, ValorPago = ?, Situacao = ?, FornecedorID = ?, FuncionarioID = ?, PlanoContaID = ?, TipoCobrancaRecebimentoID = ?, Observacao = ? WHERE ContaPagarID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ContasPagar->getVALOR());
        $stmt->bindValue(2, $ContasPagar->getDATAVENCIMENTO());
        $stmt->bindValue(3, $ContasPagar->getDESCONTO());
        $stmt->bindValue(4, $ContasPagar->getJUROS());
        $stmt->bindValue(5, $ContasPagar->getDATAPAGAMENTO());
        $stmt->bindValue(6, $ContasPagar->getVALORPAGO());
        $stmt->bindValue(7, $ContasPagar->getSITUACAO());
        $stmt->bindValue(8, $ContasPagar->getFORNECEDORID());
        $stmt->bindValue(9, $ContasPagar->getFUNCIONARIOID());
        $stmt->bindValue(10, $ContasPagar->getPLANOCONTAID());
        $stmt->bindValue(11, $ContasPagar->getTIPOCOBRANCARECEBIMENTOID());
        $stmt->bindValue(12, $ContasPagar->getOBSERVACAO());

        $stmt->execute();
    }

    public function delete($ContaPagarID) {
        $sql = 'DELETE FROM ContasPagar WHERE ContaPagarID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ContaPagarID);

        $stmt->execute();
    }
}
?>    
