<?php

class PermissaoDAO{
    public function create (Permissao $Permissao) {
        $sql = 'INSERT INTO Permissao (Permissao) VALUES (?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Permissao->getPERMISSAO());
               

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Permissao';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Permissao $Permissao {
        $sql = 'UPDATE Permissao SET Permissao = ?  WHERE PermissaoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Permissao->getPERMISSAO());

        $stmt->execute();
    }

    public function delete($PermissaoID) {
        $sql = 'DELETE FROM Permissao WHERE PermissaoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $PermissaoID);

        $stmt->execute();
    }
}
?>    
