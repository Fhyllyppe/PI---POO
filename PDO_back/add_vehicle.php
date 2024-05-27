<?php
include_once 'conexao.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->placa) && isset($data->marca) && isset($data->modelo)) {
    $placa = $data->placa;
    $marca = $data->marca;
    $modelo = $data->modelo;

    $database = new Conexao();
    $db = $database->getConn();

    $query = 'INSERT INTO Veiculos (Placa, Marca, Modelo) VALUES (:placa, :marca, :modelo)';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':placa', $placa);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':modelo', $modelo);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Veículo adicionado com sucesso"]);
    } else {
        echo json_encode(["message" => "Falha ao adicionar veículo"]);
    }
} else {
    echo json_encode(["message" => "Dados inválidos"]);
}
?>
