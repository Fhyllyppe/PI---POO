<?php

class ItensCheckinDAO{
    public function create (ItensCheckin $ItensCheckin) {
        $sql = 'INSERT INTO ItensCheckin (Nome, Situacao) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ItensCheckin->getNOME());
        $stmt->bindValue(2, $ItensCheckin->getSITUACAO()); 
           
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM ItensCheckin';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(ItensCheckin $ItensCheckin) {
        $sql = 'UPDATE ItensCheckin SET Nome = ?, Situacao = ? WHERE ItemCheckinID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ItensCheckin->getNOME());
        $stmt->bindValue(2, $ItensCheckin->getSITUACAO()); 

        $stmt->execute();
    }

    public function delete($ItemCheckinID) {
        $sql = 'DELETE FROM ItensCheckin WHERE ItemCheckinID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ItemCheckinID);

        $stmt->execute();
    }
}
?>    
