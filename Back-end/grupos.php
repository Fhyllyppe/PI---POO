<?php
class Grupos {
    private $GrupoID;
    private $Nome;
    private $Observacao;
    private $Situacao;

    public function getGRUPOID() {
        return $this->GrupoID;
    }

    public function setGRUPOID($GrupoID) {
        $this->GrupoID = $GrupoID;
    }

   public function getNOME(){
        return $this->Nome;
    }

   public function setNOME($Nome){
        $this->Nome = $Nome;
    }

   public function getOBSERVACAO(){
        return $this->Nome;
   }

   public function setOBSERVACAO($Observacao){
        $this->Observacao = $Observacao;
   }

   public function getSITUACAO(){
       return $this->Situacao;
   }

   public function setSITUACAO($Situacao){
       $this->Situacao = $Situacao;
   }
}    
?>
