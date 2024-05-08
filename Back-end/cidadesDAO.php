<?php
class CidadesDAO{
    public function create (Cidades $Cidades) {
        $sql = 'INSERT INTO Cidades (CidadeID, Nome, EstadoID) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Cidades->getCIDADEID());
        $stmt->bindValue(2, $Cidades->getNOME());
        $stmt->bindValue(3, $Cidades->getESTADOID());
        
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
        $sql = 'UPDATE Cidades SET CidadeID = ?, Nome = ?, EstadoID = ?, WHERE CidadeID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Adicionais->getCIDADEID());
        $stmt->bindValue(2, $Adicionais->getNOME());
        $stmt->bindValue(3, $Adicionais->getESTADOID());
        
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
