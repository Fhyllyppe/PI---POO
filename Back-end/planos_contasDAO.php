<?php

class PlanosContasDAO{
    public function create (PlanosContas $PlanosContas) {
        $sql = 'INSERT INTO PlanosContas (Nome, Codigo, Tipo, Situacao) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $PlanosContas->getNOME());
        $stmt->bindValue(2, $PlanosContas->getCODIGO());
        $stmt->bindValue(3, $PlanosContas->getTIPO());
        $stmt->bindValue(4, $PlanosContas->getSITUACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM PlanosContas';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(PlanosContas $PlanosContas) {
        $sql = 'UPDATE PlanosContas SET Nome = ?, Codigo = ?, Tipo = ?, Situacao = ?  WHERE PlanoContaID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $PlanosContas->getNOME());
        $stmt->bindValue(2, $PlanosContas->getCODIGO());
        $stmt->bindValue(3, $PlanosContas->getTIPO());
        $stmt->bindValue(4, $PlanosContas->getSITUACAO());
        

        $stmt->execute();
    }

    public function delete($PlanoContaID) {
        $sql = 'DELETE FROM PlanosContas WHERE PlanoContaID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $PlanoContaID);

        $stmt->execute();
    }
}
?>  
