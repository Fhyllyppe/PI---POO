<?php

@include('PDO_back/Conexao.php'); 
@include('Classes_back-end/Cargos.php');
@include('Classes_back-end/CargosDAO.php');
$sql = 'INSERT INTO Cargos (CargoID, Nome, SalarioBase, Situacao) VALUES (?,?,?,?)';
$Cargos = new Cargos(0,0,0,0);
$CargosDAO = new CargosDAO();

$host = "localhost";
$port = "5432";
$user = "postgres";
$password = "isaac020492.";
$database = "pi_apuama";

$CargoID = 1;
$Nome = "Teste";
$SalarioBase = 1000;
$Situacao =0;

$bd = Conexao::getConn()->prepare($sql);

$conn = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$Cargos->setCARGOID($CargoID);
$Cargos->setNOME($Nome);
$Cargos->setSALARIOBASE($SalarioBase);
$Cargos->setSITUACAO($Situacao);

$CargosDAO->create($Cargos);

?>
