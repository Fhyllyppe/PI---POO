<?php

class FuncionariosDAO{
    public function create (Funcionarios $Funcionarios) {
        $sql = 'INSERT INTO Funcionarios (Nome, CPF, RG, DataNascimento, Sexo, Email, Telefone, Celular, Rua, Numero, Complemento, Bairro, CidadeID, CEP, NUmeroCTPS, Pis, Salario, DataAdmissao, DataDemissao, CargoID, LOGIN_, Senha, Situacao, NUmeroCNH, NumeroRegistroCNH, ValidadeCNH, CategoriaCNH, Observacao, TipoUser) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Funcionarios->getNOME());
        $stmt->bindValue(2, $Funcionarios->getCpf());
        $stmt->bindValue(3, $Funcionarios->getRg());
        $stmt->bindValue(4, $Funcionarios->getDATANASCIMENTO());
        $stmt->bindValue(5, $Funcionarios->getSEXO());
        $stmt->bindValue(6, $Funcionarios->getEMAIL());
        $stmt->bindValue(7, $Funcionarios->getTELEFONE());
        $stmt->bindValue(8, $Funcionarios->getCELULAR());
        $stmt->bindValue(9, $Funcionarios->getRUA());
        $stmt->bindValue(10, $Funcionarios->getNUMERO());
        $stmt->bindValue(11, $Funcionarios->getCOMPLEMENTO());
        $stmt->bindValue(12, $Funcionarios->getBAIRRO());
        $stmt->bindValue(13, $Funcionarios->getCIDADEID());
        $stmt->bindValue(14, $Funcionarios->getCep());
        $stmt->bindValue(15, $Funcionarios->getNUMEROCTPS());
        $stmt->bindValue(16, $Funcionarios->getPIS());
        $stmt->bindValue(17, $Funcionarios->getSALARIO());
        $stmt->bindValue(18, $Funcionarios->getDATAADMISSAO());
        $stmt->bindValue(19, $Funcionarios->getDATADEMISSAO());
        $stmt->bindValue(20, $Funcionarios->getCARGOID());
        $stmt->bindValue(21, $Funcionarios->getLogin_());
        $stmt->bindValue(22, $Funcionarios->getSENHA());
        $stmt->bindValue(23, $Funcionarios->getSITUACAO());
        $stmt->bindValue(24, $Funcionarios->getNUMEROCNH());
        $stmt->bindValue(25, $Funcionarios->getNUMEROREGISTROCNH());
        $stmt->bindValue(26, $Funcionarios->getVALIDADECNH());
        $stmt->bindValue(27, $Funcionarios->getCATEGORIACNH());
        $stmt->bindValue(28, $Funcionarios->getOBSERVACAO());
        $stmt->bindValue(29, $Funcionarios->getTIPOUSER());

        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Funcionarios';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Funcionarios $Funcionarios) {
        $sql = 'UPDATE Funcionarios SET Nome = ?, CPF = ?, RG = ?, DataNascimento = ?, Sexo = ?, Email = ?, Telefone = ?, Celular = ?, Rua = ?, Numero = ?, Complemento = ?, Bairro = ?, CidadeID = ?, CEP = ?, NUmeroCTPS = ?, Pis = ?, Salario = ?, DataAdmissao = ?, DataDemissao = ?, CargoID = ?, LOGIN_ = ?, Senha = ?, Situacao = ?, NUmeroCNH = ?, NumeroRegistroCNH = ?, ValidadeCNH = ?, CategoriaCNH = ?, Observacao = ?, TipoUser = ? WHERE FuncionarioID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Funcionarios->getNOME());
        $stmt->bindValue(2, $Funcionarios->getCpf());
        $stmt->bindValue(3, $Funcionarios->getRg());
        $stmt->bindValue(4, $Funcionarios->getDATANASCIMENTO());
        $stmt->bindValue(5, $Funcionarios->getSEXO());
        $stmt->bindValue(6, $Funcionarios->getEMAIL());
        $stmt->bindValue(7, $Funcionarios->getTELEFONE());
        $stmt->bindValue(8, $Funcionarios->getCELULAR());
        $stmt->bindValue(9, $Funcionarios->getRUA());
        $stmt->bindValue(10, $Funcionarios->getNUMERO());
        $stmt->bindValue(11, $Funcionarios->getCOMPLEMENTO());
        $stmt->bindValue(12, $Funcionarios->getBAIRRO());
        $stmt->bindValue(13, $Funcionarios->getCIDADEID());
        $stmt->bindValue(14, $Funcionarios->getCep());
        $stmt->bindValue(15, $Funcionarios->getNUMEROCTPS());
        $stmt->bindValue(16, $Funcionarios->getPIS());
        $stmt->bindValue(17, $Funcionarios->getSALARIO());
        $stmt->bindValue(18, $Funcionarios->getDATAADMISSAO());
        $stmt->bindValue(19, $Funcionarios->getDATADEMISSAO());
        $stmt->bindValue(20, $Funcionarios->getCARGOID());
        $stmt->bindValue(21, $Funcionarios->getLogin_());
        $stmt->bindValue(22, $Funcionarios->getSENHA());
        $stmt->bindValue(23, $Funcionarios->getSITUACAO());
        $stmt->bindValue(24, $Funcionarios->getNUMEROCNH());
        $stmt->bindValue(25, $Funcionarios->getNUMEROREGISTROCNH());
        $stmt->bindValue(26, $Funcionarios->getVALIDADECNH());
        $stmt->bindValue(27, $Funcionarios->getCATEGORIACNH());
        $stmt->bindValue(28, $Funcionarios->getOBSERVACAO());
        $stmt->bindValue(29, $Funcionarios->getTIPOUSER());

        $stmt->execute();
    }

    public function delete($FuncionarioID) {
        $sql = 'DELETE FROM Funcionarios WHERE FuncionarioID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $FuncionarioID);

        $stmt->execute();
    }
}
?>    
