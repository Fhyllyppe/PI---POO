<?php

class FornecedoresDAO{
    public function create (Fornecedores $Fornecedores) {
        $sql = 'INSERT INTO Fornecedores (NomeFantasia, RazaoSocial, CPF, InscricaoMunicipal, InscricaoEstadual, Rua, Numero, Complemento, Bairro, CidadeID, CEP, Email, Telefone, Fax, Celular, TipoFornecedorID, Situacao, CNPJ, RG, TipoPessoa, Observacao) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Fornecedores->getNOMEFANTASIA());
        $stmt->bindValue(2, $Fornecedores->getRAZAOSOCIAL());
        $stmt->bindValue(3, $Fornecedores->getCpf());
        $stmt->bindValue(4, $Fornecedores->getINSCRICAOMUNICIPAL());
        $stmt->bindValue(5, $Fornecedores->getINSCRICAOESTADUAL());
        $stmt->bindValue(6, $Fornecedores->getRUA());
        $stmt->bindValue(7, $Fornecedores->getNUMERO());
        $stmt->bindValue(8, $Fornecedores->getCOMPLEMENTO());
        $stmt->bindValue(9, $Fornecedores->getBAIRRO());
        $stmt->bindValue(10, $Fornecedores->getCIDADEID());
        $stmt->bindValue(11, $Fornecedores->getCep());
        $stmt->bindValue(12, $Fornecedores->getEMAIL());
        $stmt->bindValue(13, $Fornecedores->getTELEFONE());
        $stmt->bindValue(14, $Fornecedores->getFAX());
        $stmt->bindValue(15, $Fornecedores->getCELULAR());
        $stmt->bindValue(16, $Fornecedores->getTIPOFORNECEDORID());
        $stmt->bindValue(17, $Fornecedores->getSITUACAO());
        $stmt->bindValue(18, $Fornecedores->getCnpj());
        $stmt->bindValue(19, $Fornecedores->getRg());
        $stmt->bindValue(20, $Fornecedores->getTIPOPESSOA());
        $stmt->bindValue(21, $Fornecedores->getOBSERVACAO());
        

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Fornecedores';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Fornecedores $Fornecedores) {
        $sql = 'UPDATE Fornecedores SET NomeFantasia = ?, RazaoSocial = ?, CPF = ?, InscricaoMunicipal = ?, InscricaoEstadual = ?, Rua = ?, Numero = ?, Complemento = ?, Bairro = ?, CidadeID = ?, CEP = ?, Email = ?, Telefone = ?, Fax = ?, Celular = ?, TipoFornecedorID = ?, Situacao = ?, CNPJ = ?, RG = ?, TipoPessoa = ?, Observacao = ? WHERE FornecedorID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Fornecedores->getNOMEFANTASIA());
        $stmt->bindValue(2, $Fornecedores->getRAZAOSOCIAL());
        $stmt->bindValue(3, $Fornecedores->getCpf());
        $stmt->bindValue(4, $Fornecedores->getINSCRICAOMUNICIPAL());
        $stmt->bindValue(5, $Fornecedores->getINSCRICAOESTADUAL());
        $stmt->bindValue(6, $Fornecedores->getRUA());
        $stmt->bindValue(7, $Fornecedores->getNUMERO());
        $stmt->bindValue(8, $Fornecedores->getCOMPLEMENTO());
        $stmt->bindValue(9, $Fornecedores->getBAIRRO());
        $stmt->bindValue(10, $Fornecedores->getCIDADEID());
        $stmt->bindValue(11, $Fornecedores->getCep());
        $stmt->bindValue(12, $Fornecedores->getEMAIL());
        $stmt->bindValue(13, $Fornecedores->getTELEFONE());
        $stmt->bindValue(14, $Fornecedores->getFAX());
        $stmt->bindValue(15, $Fornecedores->getCELULAR());
        $stmt->bindValue(16, $Fornecedores->getTIPOFORNECEDORID());
        $stmt->bindValue(17, $Fornecedores->getSITUACAO());
        $stmt->bindValue(18, $Fornecedores->getCnpj());
        $stmt->bindValue(19, $Fornecedores->getRg());
        $stmt->bindValue(20, $Fornecedores->getTIPOPESSOA());
        $stmt->bindValue(21, $Fornecedores->getOBSERVACAO());

        $stmt->execute();
    }

    public function delete($FornecedorID) {
        $sql = 'DELETE FROM Fornecedores WHERE FornecedorID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $FornecedorID);

        $stmt->execute();
    }
}
?>    
