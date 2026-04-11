<?php
$conn = new mysqli("localhost", "root", "", "SMCar");

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
else {
    echo ('conectado');
}
?>