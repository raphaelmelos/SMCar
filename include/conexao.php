<?php
// Configurações das infos do banco de dados
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'SmCar');

// Criar conexão
$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3307);

// Verificar conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}



?>