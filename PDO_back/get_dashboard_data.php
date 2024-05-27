<?php
include_once 'conexao.php';

$database = Conexao::getConn();

// Simulando os dados obtidos do banco de dados
$data = [
    'locados' => 5,
    'a_receber' => 500,
    'a_pagar' => 800,
    'status_locacao' => [
        'reservadas' => 1,
        'devolvidas' => 1,
        'canceladas' => 1,
        'locadas' => 5
    ],
    'recebido' => 1265.00,
    'pago' => 500.00,
    'receitas' => [
        'labels' => ['01/07/2017', '02/07/2017', '03/07/2017', '04/07/2017', '05/07/2017', '06/07/2017', '07/07/2017'],
        'data' => [100, 150, 180, 200, 130, 160, 170]
    ],
    'despesas' => [
        'labels' => ['01/07/2017', '02/07/2017', '03/07/2017', '04/07/2017', '05/07/2017', '06/07/2017', '07/07/2017'],
        'data' => [80, 90, 120, 150, 110, 140, 160]
    ]
];

echo json_encode($data);
?>
