<?php

class EstadosDAO{
    public function create (Estados $Estados) {
        $sql = 'INSERT INTO Estados (Nome, UF) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Estados->getNOME());
        $stmt->bindValue(2, $Estados->getUf());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Estados';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Estados $Estados) {
        $sql = 'UPDATE Estados SET Nome = ?, UF = ? WHERE EstadoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Estados->getNOME());
        $stmt->bindValue(2, $Estados->getUf());

        $stmt->execute();
    }

    public function delete($EstadoID) {
        $sql = 'DELETE FROM Estados WHERE EstadoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $EstadoID);

        $stmt->execute();
    }
}
?>    
