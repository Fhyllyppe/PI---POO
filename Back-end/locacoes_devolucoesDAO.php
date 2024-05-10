<?php

class LocacoesDevolucoesDAO{
    public function create (LocacoesDevolucoes $LocacoesDevolucoes) {
        $sql = 'INSERT INTO LocacoesDevolucoes (ClienteID, VeiculoID, DataLocacao, HoraLocacao, DataPrevistaDevolucao, HoraPrevistaDevolucao, DataDevolucao, HoraDevolucao, FuncionarioID, ValorTotal, SeguroID, QtdeDias, KMDevolucao) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $LocacoesDevolucoes->getCLIENTEID());
        $stmt->bindValue(2, $LocacoesDevolucoes->getVEICULOID());
        $stmt->bindValue(3, $LocacoesDevolucoes->getDATALOCACAO());
        $stmt->bindValue(4, $LocacoesDevolucoes->getHORALOCACAO());
        $stmt->bindValue(5, $LocacoesDevolucoes->getDATAPREVISTADEVOLUCAO());
        $stmt->bindValue(6, $LocacoesDevolucoes->getHORAPREVISTADEVOLUCAO());
        $stmt->bindValue(7, $LocacoesDevolucoes->getDATADEVOLUCAO());
        $stmt->bindValue(8, $LocacoesDevolucoes->getHORADEVOLUCAO());
        $stmt->bindValue(9, $LocacoesDevolucoes->getFUNCIONARIOID());
        $stmt->bindValue(10, $LocacoesDevolucoes->getVALORTOTAL());
        $stmt->bindValue(11, $LocacoesDevolucoes->getSEGUROID());
        $stmt->bindValue(12, $LocacoesDevolucoes->getQTDEDIAS());
        $stmt->bindValue(13, $LocacoesDevolucoes->getKMDEVOLUCAO()); 
           
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM LocacoesDevolucoes';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(LocacoesDevolucoes $LocacoesDevolucoes) {
        $sql = 'UPDATE LocacoesDevolucoes SET Nome = ?, Situacao = ? WHERE LocacaoDevolucaoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $LocacoesDevolucoes->getCLIENTEID());
        $stmt->bindValue(2, $LocacoesDevolucoes->getVEICULOID());
        $stmt->bindValue(3, $LocacoesDevolucoes->getDATALOCACAO());
        $stmt->bindValue(4, $LocacoesDevolucoes->getHORALOCACAO());
        $stmt->bindValue(5, $LocacoesDevolucoes->getDATAPREVISTADEVOLUCAO());
        $stmt->bindValue(6, $LocacoesDevolucoes->getHORAPREVISTADEVOLUCAO());
        $stmt->bindValue(7, $LocacoesDevolucoes->getDATADEVOLUCAO());
        $stmt->bindValue(8, $LocacoesDevolucoes->getHORADEVOLUCAO());
        $stmt->bindValue(9, $LocacoesDevolucoes->getFUNCIONARIOID());
        $stmt->bindValue(10, $LocacoesDevolucoes->getVALORTOTAL());
        $stmt->bindValue(11, $LocacoesDevolucoes->getSEGUROID());
        $stmt->bindValue(12, $LocacoesDevolucoes->getQTDEDIAS());
        $stmt->bindValue(13, $LocacoesDevolucoes->getKMDEVOLUCAO());

        $stmt->execute();
    }

    public function delete($LocacaoDevolucaoID) {
        $sql = 'DELETE FROM LocacoesDevolucoes WHERE LocacaoDevolucaoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $LocacaoDevolucaoID);

        $stmt->execute();
    }
}
?>    
