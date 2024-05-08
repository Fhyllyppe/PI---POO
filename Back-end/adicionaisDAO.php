<?php

class AdicionaisDAO{
    public function create (Adicionais $Adicionais) {
        $sql = 'INSERT INTO Adicionais (AdicionalID, TipoAdicionalID, LocacaoDevolucaoID, Situacao) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Adicionais->getADICIONALID());
        $stmt->bindValue(2, $Adicionais->getTIPOADICIONALID());
        $stmt->bindValue(3, $Adicionais->getLOCACAODEVOLUCAOID());
        $stmt->bindValue(4, $Adicionais->getSITUACAO());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Adicionais';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Adicionais $Adicionais) {
        $sql = 'UPDATE Adicionais SET AdicionalID = ?, TipoAdicionalID = ?, LocacaoDevolucaoID = ?, Situacao = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Adicionais->getADICIONALID());
        $stmt->bindValue(2, $Adicionais->getTIPOADICIONALID());
        $stmt->bindValue(3, $Adicionais->getLOCACAODEVOLUCAOID());
        $stmt->bindValue(4, $Adicionais->getSITUACAO());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM Adicionais WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}
?>    
