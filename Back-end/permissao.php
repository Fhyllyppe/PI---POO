<?php

class Permissao {
    private $PermissaoID;
    private $Permissao;
    
    public function getPERMISSAOID() {
        return $this->PermissaoID;
    }

    public function setPERMISSAOID($PermissaoID) {
        $this->PermissaoID = $PermissaoID;
    }

    public function getPERMISSAO() {
        return $this->Permissao;
    }

    public function setPERMISSAO($Permissao) {
        $this->Permissao = $Permissao;
    }
}
?>
