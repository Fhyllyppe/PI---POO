<?php

class ContasReceberDAO{
    public function create (ContasReceber $ContasReceber) {
        $sql = 'INSERT INTO ContasReceber (Valor, DataVencimento, Desconto, Juros, DataPagamento, ValorPago, Situacao, FornecedorID, FuncionarioID, PlanoContaID, TipoCobrancaRecebimentoID, Observacao) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ContasReceber->getVALOR());
        $stmt->bindValue(2, $ContasReceber->getDATAVENCIMENTO());
        $stmt->bindValue(3, $ContasReceber->getDESCONTO());
        $stmt->bindValue(4, $ContasReceber->getJUROS());
        $stmt->bindValue(5, $ContasReceber->getDATAPAGAMENTO());
        $stmt->bindValue(6, $ContasReceber->getVALORPAGO());
        $stmt->bindValue(7, $ContasReceber->getSITUACAO());
        $stmt->bindValue(8, $ContasReceber->getPLANOCONTAID());
        $stmt->bindValue(9, $ContasReceber->getCLIENTEID());
        $stmt->bindValue(10, $ContasReceber->getTIPOCOBRANCARECEBIMENTOID());
        $stmt->bindValue(11, $ContasReceber->getLOCACAODEVOLUCAOID());
        $stmt->bindValue(12, $ContasReceber->getOBSERVACAO());


        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM ContasReceber';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(ContasReceber $ContasReceber) {
        $sql = 'UPDATE ContasReceber SET Valor = ?, DataVencimento = ?, Desconto = ?, Juros = ?, DataPagamento = ?, ValorPago = ?, Situacao = ?, FornecedorID = ?, FuncionarioID = ?, PlanoContaID = ?, TipoCobrancaRecebimentoID = ?, Observacao = ? WHERE ContaReceberID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ContasReceber->getVALOR());
        $stmt->bindValue(2, $ContasReceber->getDATAVENCIMENTO());
        $stmt->bindValue(3, $ContasReceber->getDESCONTO());
        $stmt->bindValue(4, $ContasReceber->getJUROS());
        $stmt->bindValue(5, $ContasReceber->getDATAPAGAMENTO());
        $stmt->bindValue(6, $ContasReceber->getVALORPAGO());
        $stmt->bindValue(7, $ContasReceber->getSITUACAO());
        $stmt->bindValue(8, $ContasReceber->getPLANOCONTAID());
        $stmt->bindValue(9, $ContasReceber->getCLIENTEID());
        $stmt->bindValue(10, $ContasReceber->getTIPOCOBRANCARECEBIMENTOID());
        $stmt->bindValue(11, $ContasReceber->getLOCACAODEVOLUCAOID());
        $stmt->bindValue(12, $ContasReceber->getOBSERVACAO());

        $stmt->execute();
    }

    public function delete($ContaReceberID) {
        $sql = 'DELETE FROM ContasReceber WHERE ContaReceberID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ContaReceberID);

        $stmt->execute();
    }
}
?>    
