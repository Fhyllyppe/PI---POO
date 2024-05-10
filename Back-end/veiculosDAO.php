<?php

class VeiculosDAO{
    public function create (Veiculos $Veiculos) {
        $sql = 'INSERT INTO Veiculos (Proprietario, Renavam, Placa, Chassi, Marca, Modelo, Ano, ValorLocacao,DataAquisicao, Cor, NumeroPortas, Motor, Cambio, Combustivel, NivelTanque, KmAtual, Disponibilidade, FornecedorID, GrupoID, GrupoID, Observacao, Situacao) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Veiculos->getPROPRIETARIO());
        $stmt->bindValue(2, $Veiculos->getRENAVAM());
        $stmt->bindValue(3, $Veiculos->getPLACA());
        $stmt->bindValue(4, $Veiculos->getCHASSI());
        $stmt->bindValue(5, $Veiculos->getMARCA());
        $stmt->bindValue(6, $Veiculos->getMODELO());
        $stmt->bindValue(7, $Veiculos->getANO());
        $stmt->bindValue(8, $Veiculos->getVALORLOCACAO());
        $stmt->bindValue(9, $Veiculos->getDATAAQUISICAO());
        $stmt->bindValue(10, $Veiculos->getCOR());
        $stmt->bindValue(11, $Veiculos->getNUMEROPORTAS());
        $stmt->bindValue(12, $Veiculos->getMOTOR());
        $stmt->bindValue(13, $Veiculos->getCAMBIO());
        $stmt->bindValue(14, $Veiculos->getCOMBUSTIVEL());
        $stmt->bindValue(15, $Veiculos->getNIVELTANQUE());
        $stmt->bindValue(16, $Veiculos->getKMATUAL());
        $stmt->bindValue(17, $Veiculos->getDISPONIBILIDADE());
        $stmt->bindValue(18, $Veiculos->getFORNECEDORID());
        $stmt->bindValue(19, $Veiculos->getGRUPOID());
        $stmt->bindValue(20, $Veiculos->getOBSERVACAO());
        $stmt->bindValue(21, $Veiculos->getSITUACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Veiculos';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Veiculos $Veiculos) {
        $sql = 'UPDATE Veiculos SET Proprietario = ?, Renavam = ?, Placa = ?, Chassi = ?, Marca = ?, Modelo = ?, Ano = ?, ValorLocacao = ?, DataAquisicao = ?, Cor = ?, NumeroPortas = ?, Motor = ?, Cambio = ?, Combustivel = ?, NivelTanque = ?, KmAtual = ?, Disponibilidade = ?, FornecedorID = ?, GrupoID = ?, Observacao = ?, Situacao = ?   WHERE VeiculoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Veiculos->getPROPRIETARIO());
        $stmt->bindValue(2, $Veiculos->getRENAVAM());
        $stmt->bindValue(3, $Veiculos->getPLACA());
        $stmt->bindValue(4, $Veiculos->getCHASSI());
        $stmt->bindValue(5, $Veiculos->getMARCA());
        $stmt->bindValue(6, $Veiculos->getMODELO());
        $stmt->bindValue(7, $Veiculos->getANO());
        $stmt->bindValue(8, $Veiculos->getVALORLOCACAO());
        $stmt->bindValue(9, $Veiculos->getDATAAQUISICAO());
        $stmt->bindValue(10, $Veiculos->getCOR());
        $stmt->bindValue(11, $Veiculos->getNUMEROPORTAS());
        $stmt->bindValue(12, $Veiculos->getMOTOR());
        $stmt->bindValue(13, $Veiculos->getCAMBIO());
        $stmt->bindValue(14, $Veiculos->getCOMBUSTIVEL());
        $stmt->bindValue(15, $Veiculos->getNIVELTANQUE());
        $stmt->bindValue(16, $Veiculos->getKMATUAL());
        $stmt->bindValue(17, $Veiculos->getDISPONIBILIDADE());
        $stmt->bindValue(18, $Veiculos->getFORNECEDORID());
        $stmt->bindValue(19, $Veiculos->getGRUPOID());
        $stmt->bindValue(20, $Veiculos->getOBSERVACAO());
        $stmt->bindValue(21, $Veiculos->getSITUACAO());
        

        $stmt->execute();
    }

    public function delete($VeiculoID) {
        $sql = 'DELETE FROM Veiculos WHERE VeiculoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $VeiculoID);

        $stmt->execute();
    }
}
?>  
