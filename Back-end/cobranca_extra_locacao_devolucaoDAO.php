<?php

class CobrancasExtrasLocacaoDevolucaoDAO{
    public function create (CobrancasExtrasLocacaoDevolucao $CobrancasExtrasLocacaoDevolucao) {
        $sql = 'INSERT INTO CobrancasExtrasLocacaoDevolucao (TipoCobrancaExtraID, LocacaoDevolucaoID, Situacao) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $CobrancasExtrasLocacaoDevolucao->getTIPOCOBRANCAEXTRAID());
        $stmt->bindValue(2, $CobrancasExtrasLocacaoDevolucao->getLOCACAODEVOLUCAOID());
        $stmt->bindValue(3, $CobrancasExtrasLocacaoDevolucao->getSITUACAO());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM CobrancasExtrasLocacaoDevolucao';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(CobrancasExtrasLocacaoDevolucao $CobrancasExtrasLocacaoDevolucao) {
        $sql = 'UPDATE CobrancasExtrasLocacaoDevolucao SET TipoCobrancaExtraID = ?, LocacaoDevolucaoID = ?, Situacao = ? WHERE CargoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $CobrancasExtrasLocacaoDevolucao->getTIPOCOBRANCAEXTRAID());
        $stmt->bindValue(2, $CobrancasExtrasLocacaoDevolucao->getLOCACAODEVOLUCAOID());
        $stmt->bindValue(3, $CobrancasExtrasLocacaoDevolucao->getSITUACAO());

        $stmt->execute();
    }

    public function delete($CobrancaExtraID) {
        $sql = 'DELETE FROM CobrancasExtrasLocacaoDevolucao WHERE CobrancaExtraID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $CobrancaExtraID);

        $stmt->execute();
    }
}
?>    
