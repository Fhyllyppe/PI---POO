<?php

class TiposAdicionaisDAO{
    public function create (TiposAdicionais $TiposAdicionais) {
        $sql = 'INSERT INTO TiposAdicionais (Nome, Descricao, Valor, Situacao) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TiposAdicionais->getNOME());
        $stmt->bindValue(2, $TiposAdicionais->getDESCRICAO());
        $stmt->bindValue(3, $TiposAdicionais->getVALOR());
        $stmt->bindValue(4, $TiposAdicionais->getSITUACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM TiposAdicionais';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(TiposAdicionais $TiposAdicionais) {
        $sql = 'UPDATE TiposAdicionais SET Nome = ?, Descricao = ?, Valor = ?, Situacao = ?  WHERE TipoAdicionalID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TiposAdicionais->getNOME());
        $stmt->bindValue(2, $TiposAdicionais->getDESCRICAO());
        $stmt->bindValue(3, $TiposAdicionais->getVALOR());
        $stmt->bindValue(4, $TiposAdicionais->getSITUACAO());
        

        $stmt->execute();
    }

    public function delete($TipoAdicionalID) {
        $sql = 'DELETE FROM TiposAdicionais WHERE TipoAdicionalID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TipoAdicionalID);

        $stmt->execute();
    }
}
?>  
