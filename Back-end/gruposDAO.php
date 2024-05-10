<?php

class GruposDAO{
    public function create (Grupos $Grupos) {
        $sql = 'INSERT INTO Grupos (Nome, Observacao, Situacao) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Grupos->getNOME());
        $stmt->bindValue(2, $Grupos->getOBSERVACAO());
        $stmt->bindValue(3, $Grupos->getSITUACAO());       
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Grupos';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Grupos $Grupos) {
        $sql = 'UPDATE Grupos SET Nome = ?, Observacao = ?, Situacao = ? WHERE GrupoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Grupos->getNOME());
        $stmt->bindValue(2, $Grupos->getOBSERVACAO());
        $stmt->bindValue(3, $Grupos->getSITUACAO());
        
        $stmt->execute();
    }

    public function delete($GrupoID) {
        $sql = 'DELETE FROM Grupos WHERE GrupoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $GrupoID);

        $stmt->execute();
    }
}
?>    
