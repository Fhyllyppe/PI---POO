<?php

class CargosDAO{
    public function create (Cidades $Cidades) {
        $sql = 'INSERT INTO Cidades (Nome, EstadoID) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Cidades->getNOME());
        $stmt->bindValue(2, $Cidades->getESTADOID());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Cidades';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Cidades $Cidades) {
        $sql = 'UPDATE Cidades SET Nome = ?, EstadoID = ?  WHERE CidadeID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Cidades->getNOME());
        $stmt->bindValue(2, $Cidades->getESTADOID());
        

        $stmt->execute();
    }

    public function delete($CidadeID) {
        $sql = 'DELETE FROM Cidades WHERE CidadeID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $CidadeID);

        $stmt->execute();
    }
}
?>    
