<?php
// ==========================
// CONEXÃO COM O BANCO
// ==========================
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'SmCar');

$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3307);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// ==========================
// BUSCA
// ==========================
// $buscar = $_GET['buscar'] ?? '';

// // SQL com Prepared Statement
// $sql = "SELECT * FROM veiculos
//         WHERE modelo LIKE ?
//            OR marca LIKE ?";

// $stmt = $conexao->prepare($sql);

// $param = "%" . $buscar . "%";
// $stmt->bind_param("ss", $param, $param);

// $stmt->execute();

// $resultado = $stmt->get_result();
// ?>


