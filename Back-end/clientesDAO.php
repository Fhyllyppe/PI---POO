<?php

class ClientesDAO{
    public function create (Clientes $Clientes) {
        $sql = 'INSERT INTO Clientes (Nome, RazaoSocial, CPF, RG, DataNascimento, Sexo, Email, Telefone, Celular, Rua, CEP, CidadeID, NumeroCNH, NumeroRegistroCNH, ValidadeCNH, CategoriaCNH, Observacao, Situacao, CNPJ, InscricaoMunicipal, InscricaoEstadual, TipoPessoa, Senha) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Clientes->getNOME());
        $stmt->bindValue(2, $Clientes->getRAZAOSOCIAL());
        $stmt->bindValue(3, $Clientes->getCpf());
        $stmt->bindValue(4, $Clientes->getRg());
        $stmt->bindValue(5, $Clientes->getDATANASCIMENTO());
        $stmt->bindValue(6, $Clientes->getSEXO());
        $stmt->bindValue(7, $Clientes->getEMAIL());
        $stmt->bindValue(8, $Clientes->getTELEFONE());
        $stmt->bindValue(9, $Clientes->getCELULAR());
        $stmt->bindValue(10, $Clientes->getRUA());
        $stmt->bindValue(11, $Clientes->getCep());
        $stmt->bindValue(12, $Clientes->getCIDADEID());
        $stmt->bindValue(13, $Clientes->getNUMEROCNH());
        $stmt->bindValue(14, $Clientes->getNUMEROREGISTROCNH());
        $stmt->bindValue(15, $Clientes->getVALIDADECNH());
        $stmt->bindValue(16, $Clientes->getCATEGORIACNH());
        $stmt->bindValue(17, $Clientes->getOBSERVACAO());
        $stmt->bindValue(18, $Clientes->getSITUACAO());
        $stmt->bindValue(19, $Clientes->getCnpj());
        $stmt->bindValue(20, $Clientes->getINSCRICAOMUNICIPAL());
        $stmt->bindValue(21, $Clientes->getINSCRICAOESTADUAL());
        $stmt->bindValue(22, $Clientes->getTIPOPESSOA());
        $stmt->bindValue(23, $Clientes->getSENHA());

        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Clientes';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Clientes $Clientes) {
        $sql = 'UPDATE Clientes SET Nome = ?, RazaoSocial = ?, CPF = ?, RG = ?, DataNascimento = ?, Sexo = ?, Email = ?, Telefone = ?, Celular = ?, Rua = ?, CEP = ?, CidadeID = ?, NumeroCNH = ?, NumeroRegistroCNH = ?, ValidadeCNH = ?, CategoriaCNH = ?, Observacao = ?, Situacao = ?, CNPJ = ?, InscricaoMunicipal = ?, InscricaoEstadual = ?, TipoPessoa = ?, Senha = ?  WHERE ClienteID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Clientes->getNOME());
        $stmt->bindValue(2, $Clientes->getRAZAOSOCIAL());
        $stmt->bindValue(3, $Clientes->getCpf());
        $stmt->bindValue(4, $Clientes->getRg());
        $stmt->bindValue(5, $Clientes->getDATANASCIMENTO());
        $stmt->bindValue(6, $Clientes->getSEXO());
        $stmt->bindValue(7, $Clientes->getEMAIL());
        $stmt->bindValue(8, $Clientes->getTELEFONE());
        $stmt->bindValue(9, $Clientes->getCELULAR());
        $stmt->bindValue(10, $Clientes->getRUA());
        $stmt->bindValue(11, $Clientes->getCep());
        $stmt->bindValue(12, $Clientes->getCIDADEID());
        $stmt->bindValue(13, $Clientes->getNUMEROCNH());
        $stmt->bindValue(14, $Clientes->getNUMEROREGISTROCNH());
        $stmt->bindValue(15, $Clientes->getVALIDADECNH());
        $stmt->bindValue(16, $Clientes->getCATEGORIACNH());
        $stmt->bindValue(17, $Clientes->getOBSERVACAO());
        $stmt->bindValue(18, $Clientes->getSITUACAO());
        $stmt->bindValue(19, $Clientes->getCnpj());
        $stmt->bindValue(20, $Clientes->getINSCRICAOMUNICIPAL());
        $stmt->bindValue(21, $Clientes->getINSCRICAOESTADUAL());
        $stmt->bindValue(22, $Clientes->getTIPOPESSOA());
        $stmt->bindValue(23, $Clientes->getSENHA());
        

        $stmt->execute();
    }

    public function delete($ClienteID) {
        $sql = 'DELETE FROM Clientes WHERE ClienteID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ClienteID);

        $stmt->execute();
    }
}
?>    
