<?php

class ItensCheckinLocacaoDevolucaoDAO{
    public function create (ItensCheckinLocacaoDevolucao $ItensCheckinLocacaoDevolucao) {
        $sql = 'INSERT INTO ItensCheckinLocacaoDevolucao (ItemCheckinID, LocacaoDevolucaoID, Situacao, Observacao) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ItensCheckinLocacaoDevolucao->getITEMCHECKINID());
        $stmt->bindValue(2, $ItensCheckinLocacaoDevolucao->getLOCACAODEVOLUCAOID()); 
        $stmt->bindValue(3, $ItensCheckinLocacaoDevolucao->getSITUACAO());       
        $stmt->bindValue(4, $ItensCheckinLocacaoDevolucao->getOBSERVACAO());     
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM ItensCheckinLocacaoDevolucao';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(ItensCheckinLocacaoDevolucao $ItensCheckinLocacaoDevolucao) {
        $sql = 'UPDATE ItensCheckin SET ItemCheckinID = ?, LocacaoDevolucaoID = ?, Situacao = ?, Observacao = ? WHERE LocacaoDevolucaoCheckinID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ItensCheckinLocacaoDevolucao->getITEMCHECKINID());
        $stmt->bindValue(2, $ItensCheckinLocacaoDevolucao->getLOCACAODEVOLUCAOID()); 
        $stmt->bindValue(3, $ItensCheckinLocacaoDevolucao->getSITUACAO());       
        $stmt->bindValue(4, $ItensCheckinLocacaoDevolucao->getOBSERVACAO()); 

        $stmt->execute();
    }

    public function delete($LocacaoDevolucaoCheckinID) {
        $sql = 'DELETE FROM ItensCheckinLocacaoDevolucao WHERE LocacaoDevolucaoCheckinID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $LocacaoDevolucaoCheckinID);

        $stmt->execute();
    }
}
?>    
