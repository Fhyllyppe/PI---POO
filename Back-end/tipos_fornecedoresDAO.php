class TiposFornecedoresDAO{
    public function create (TiposFornecedores $TiposFornecedores) {
        $sql = 'INSERT INTO TiposFornecedores (Nome, Situacao) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TiposFornecedores->getNOME());
        $stmt->bindValue(2, $TiposFornecedores->getSITUACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM TiposFornecedores';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(TiposFornecedores $TiposFornecedores) {
        $sql = 'UPDATE Clientes SET Nome = ?, Situacao = ?  WHERE TipoFornecedorID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TiposFornecedores->getNOME());
        $stmt->bindValue(2, $TiposFornecedores->getSITUACAO());
        

        $stmt->execute();
    }

    public function delete($TipoFornecedorID) {
        $sql = 'DELETE FROM TiposFornecedores WHERE TipoFornecedorID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $TipoFornecedorID);

        $stmt->execute();
    }
}
?>  
