<?php

class CargosDAO{
    public function create (Cargos $Cargos) {
        $sql = 'INSERT INTO Cargos (CargoID, Nome, SalarioBase, Situacao) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Cargos->getCARGOID());
        $stmt->bindValue(2, $Cargos->getNOME());
        $stmt->bindValue(3, $Cargos->getSALARIOBASE());
        $stmt->bindValue(4, $Cargos->getSITUACAO());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Cargos';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Cargos $Cargos) {
        $sql = 'UPDATE Cargos SET CargoID = ?, Nome = ?, SalarioBase = ?, Situacao = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Cargos->getCARGOID());
        $stmt->bindValue(2, $Cargos->getNOME());
        $stmt->bindValue(3, $Cargos->getSALARIOBASE());
        $stmt->bindValue(4, $Cargos->getSITUACAO());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM Cargos WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}
?>    
