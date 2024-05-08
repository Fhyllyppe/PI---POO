<?php

@include('PDO_back/Conexao.php'); 
@include('Classes_back-end/Adicionais.php');
@include('Classes_back-end/AdicionaisDAO.php');
$adicionais = new Adicionais();
$adicionaisDAO = new AdicionaisDAO();

$AdicionalID = 0;
$TipoAdicionalID = "TipoTeste";
$LocacaoDevolucaoID = "Teste devolução";
$Situacao = "Teste situação";

$bd = Conexao::getConn()->prepare($sql);

$conn = new mysqli('localhost', 'postgres', '', 'pi_apuama');

$adicional->setADICIONALID($AdicionalID);
$adicional->setTIPOADICIONALID($TipoAdicionalID);
$adicional->setLOCACAODEVOLUCAOID($LocacaoDevolucao);
$adicional->setSITUACAO($Situacao);

$adicionalDAO->create($adicional);

?>