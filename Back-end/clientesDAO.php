<?php

class ClientesDAO {

    private function validarCPF($cpf) {
        // Remove qualquer caractere que não seja número
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        
        // Verifica se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Calcula os dígitos verificadores
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }

    private function validarCNPJ($cnpj) {
        // Remove qualquer caractere que não seja número
        $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

        // Verifica se o CNPJ tem 14 dígitos
        if (strlen($cnpj) != 14) {
            return false;
        }

        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{13}/', $cnpj)) {
            return false;
        }

        // Calcula os dígitos verificadores
        for ($t = 12; $t < 14; $t++) {
            for ($d = 0, $c = 0, $p = $t - 7; $c < $t; $c++) {
                $d += $cnpj[$c] * $p--;
                if ($p < 2) $p = 9;
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cnpj[$c] != $d) {
                return false;
            }
        }

        return true;
    }

    public function create(Clientes $Clientes) {
        // Valida CPF
        if (!$this->validarCPF($Clientes->getCpf())) {
            throw new Exception("CPF inválido");
        }

        // Valida CNPJ (se aplicável)
        if ($Clientes->getCnpj() && !$this->validarCNPJ($Clientes->getCnpj())) {
            throw new Exception("CNPJ inválido");
        }

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

    public function read() {
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
        $sql = 'UPDATE Clientes SET Nome = ?, RazaoSocial = ?, CPF = ?, RG = ?, DataNascimento = ?, Sexo = ?, Email = ?, Telefone = ?, Celular = ?, Rua = ?, CEP = ?, CidadeID = ?, NumeroCNH = ?, NumeroRegistroCNH = ?, ValidadeCNH = ?, CategoriaCNH = ?, Observacao = ?, Situacao = ?, CNPJ = ?, InscricaoMunicipal = ?, InscricaoEstadual = ?, TipoPessoa = ?, Senha = ? WHERE ClienteID = ?';
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
        $stmt->bindValue(24, $Clientes->getClienteID());

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
