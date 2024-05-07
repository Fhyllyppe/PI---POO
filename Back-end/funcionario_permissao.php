<?php

class FuncionarioPermissao {
    private $FuncionarioPermissaoID;
    private $PermissaoID;
    private $FuncionarioID;

    public function getFUNCIONARIOPERMISSAOID() {
        return $this->FuncionarioPermissaoID;
    }

    public function setFUNCIONARIOPERMISSAOID($FuncionarioPermissaoID) {
        $this->FuncionarioPermissaoID = $FuncionarioPermissaoID;
    }

    public function getPERMISSAOID() {
        return $this->PermissaoID;
    }

    public function setPERMISSAOID($PermissaoID) {
        $this->PermissaoID = $PermissaoID;
    }

    public function getFUNCIONARIOID() {
        return $this->FuncionarioID;
    }

    public function setFUNCIONARIOID($FuncionarioID) {
        $this->FuncionarioID = $FuncionarioID;
    }
}
?>
