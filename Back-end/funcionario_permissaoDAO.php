<?php

class FuncionarioPermissaoDAO{
    public function create (FuncionarioPermissao $FuncionarioPermissao) {
        $sql = 'INSERT INTO FuncionarioPermissao (PermissaoID, FuncionarioID) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $FuncionarioPermissao->getPERMISSAOID());
        $stmt->bindValue(2, $FuncionarioPermissao->getFUNCIONARIOID());       
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM FuncionarioPermissao';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(FuncionarioPermissao $FuncionarioPermissao) {
        $sql = 'UPDATE FuncionarioPermissao SET Nome = ?, CPF = ? WHERE FuncionarioPermissaoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $FuncionarioPermissao->getPERMISSAOID());
        $stmt->bindValue(2, $FuncionarioPermissao->getFUNCIONARIOID()); 

        $stmt->execute();
    }

    public function delete($FuncionarioPermissaoID) {
        $sql = 'DELETE FROM FuncionarioPermissao WHERE FuncionarioPermissaoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $FuncionarioPermissaoID);

        $stmt->execute();
    }
}
?>    
