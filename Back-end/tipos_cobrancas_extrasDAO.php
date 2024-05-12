<?php

class TiposCobrancasExtrasDAO{
    public function create (TiposCobrancasExtras $TiposCobrancasExtras) {
        $sql = 'INSERT INTO TiposCobrancasExtras (Nome, Descricao, Valor, Situacao) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TiposCobrancasExtras->getNOME());
        $stmt->bindValue(2, $TiposCobrancasExtras->getDESCRICAO());
        $stmt->bindValue(3, $TiposCobrancasExtras->getVALOR());
        $stmt->bindValue(4, $TiposCobrancasExtras->getSITUACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM TiposCobrancasExtras';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(TiposCobrancasExtras $TiposCobrancasExtras) {
        $sql = 'UPDATE TiposCobrancasExtras SET Nome = ?, Descricao = ?, Valor = ?, Situacao = ?  WHERE TipoCobrancaExtraID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
         $stmt->bindValue(1, $TiposCobrancasExtras->getNOME());
         $stmt->bindValue(2, $TiposCobrancasExtras->getDESCRICAO());
         $stmt->bindValue(3, $TiposCobrancasExtras->getVALOR());
         $stmt->bindValue(4, $TiposCobrancasExtras->getSITUACAO());
        

        $stmt->execute();
    }

    public function delete($TipoCobrancaExtraID) {
        $sql = 'DELETE FROM TiposCobrancasExtras WHERE TipoCobrancaExtraID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TipoCobrancaExtraID);

        $stmt->execute();
    }
}
?>  
