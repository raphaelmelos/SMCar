<?php
$conn = new mysqli("localhost", "root", "", "SMCar", 3307);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}


$marca = $_GET['marca'] ?? '';

if ($marca != "") {
    $sql = "SELECT * FROM veiculos WHERE marca = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $marca);
} else {
    $sql = "SELECT * FROM veiculos";
    $stmt = $conn->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();
?>

<h2>Veículos</h2>

<?php while ($row = $result->fetch_assoc()): ?>
    <p>
        <?= $row['marca']?? "" ?> 
    </p>
<?php endwhile; ?>