<?php

class TiposCobrancasRecebimentosDAO{
    public function create (TiposCobrancasRecebimentos $TiposCobrancasRecebimentos) {
        $sql = 'INSERT INTO TiposCobrancasRecebimentos (Nome, Situacao) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TiposCobrancasRecebimentos->getNOME());
        $stmt->bindValue(2, $TiposCobrancasRecebimentos->getSITUACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM TiposCobrancasRecebimentos';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(TiposCobrancasRecebimentos $TiposCobrancasRecebimentos) {
        $sql = 'UPDATE TiposCobrancasRecebimentos SET Nome = ?, Situacao = ?  WHERE TipoCobrancaRecebimentoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TiposCobrancasRecebimentos->getNOME());
        $stmt->bindValue(2, $TiposCobrancasRecebimentos->getSITUACAO());
        

        $stmt->execute();
    }

    public function delete($TipoCobrancaRecebimentoID) {
        $sql = 'DELETE FROM TiposCobrancasRecebimento WHERE TipoCobrancaRecebimentoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TipoCobrancaRecebimentoID);

        $stmt->execute();
    }
}
?>  
