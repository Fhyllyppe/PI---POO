<?php

class LogDAO{
    public function create (Log $Log) {
        $sql = 'INSERT INTO Log (Tabela, Chave, DataHora, FuncionarioID, TipoAlteracao) VALUES (?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Log->getTABELA());
        $stmt->bindValue(2, $Log->getCHAVE());
        $stmt->bindValue(3, $Log->getDATAHORA());
        $stmt->bindValue(4, $Log->getFUNCIONARIOID());
        $stmt->bindValue(5, $Log->getTIPOALTERACAO());
               

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Log';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Log $Log) {
        $sql = 'UPDATE Log SET Tabela = ?, Chave = ?, DataHora = ?, FuncionarioID = ?, TipoAlteracao = ? WHERE LogID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Log->getTABELA());
        $stmt->bindValue(2, $Log->getCHAVE());
        $stmt->bindValue(3, $Log->getDATAHORA());
        $stmt->bindValue(4, $Log->getFUNCIONARIOID());
        $stmt->bindValue(5, $Log->getTIPOALTERACAO());

        $stmt->execute();
    }

    public function delete($LogID) {
        $sql = 'DELETE FROM Log WHERE LogID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $LogID);

        $stmt->execute();
    }
}
?>    
