<?php

class SegurosDAO{
    public function create (Seguros $Seguros) {
        $sql = 'INSERT INTO Seguros (Nome, Valor, Descricao, FornecedorID, Situacao) VALUES (?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Seguros->getNOME());
        $stmt->bindValue(2, $Seguros->getVALOR());
        $stmt->bindValue(3, $Seguros->getDESCRICAO());
        $stmt->bindValue(4, $Seguros->getFORNECEDORID());
        $stmt->bindValue(5, $Seguros->getSITUACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Seguros';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Seguros $Seguros) {
        $sql = 'UPDATE Seguros SET Nome = ?, Valor = ?, Descricao = ?, FornecedorID = ?, Situacao = ?  WHERE SeguroID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Seguros->getNOME());
        $stmt->bindValue(2, $Seguros->getVALOR());
        $stmt->bindValue(3, $Seguros->getDESCRICAO());
        $stmt->bindValue(4, $Seguros->getFORNECEDORID());
        $stmt->bindValue(5, $Seguros->getSITUACAO());
        

        $stmt->execute();
    }

    public function delete($SeguroID) {
        $sql = 'DELETE FROM Seguros WHERE SeguroID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $SeguroID);

        $stmt->execute();
    }
}
?>  
