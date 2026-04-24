<?php
include 'include/conexao.php';
include 'include/header.php';
?>

<?php
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    die("ID do veículo inválido ou não fornecido.");
}
?>

<main>
    <?php
$sql = "SELECT * FROM Veiculos WHERE id_Veiculos = ? LIMIT 1";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id); // "i" para inteiro
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo '<img src="./assests/' . htmlspecialchars($row['Foto']) . '" alt="' . htmlspecialchars($row['Descricao']) . '">';
} else {
    echo '<p>Nenhuma foto do veículo no momento.</p>';
}
mysqli_stmt_close($stmt);
    ?>
</main>

<aside>

<h2>Especificações</h2>
    
<div>
<p>
    <?php
$sql = "SELECT * FROM Veiculos WHERE id_Veiculos = ? LIMIT 1";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo '<p>Ano: ' . htmlspecialchars($row['Ano']) . '<br>';
    echo 'Kms: ' . htmlspecialchars($row['Kms']) . '<br>';
    echo 'Câmbio: ' . htmlspecialchars($row['Cambio']) . '<br>';
    echo 'Cor: ' . htmlspecialchars($row['Cor']) . '<br>';
    echo 'Carroceria: ' . htmlspecialchars($row['Carroceria']) . '<br>';
    echo 'Preço: R$ ' . number_format($row['Preco'], 0, ',', '.') . '<br>';
    echo 'Marca: ' . htmlspecialchars($row['Marca']) . '</p>';
} else {
    echo '<p>Nenhuma informação sobre o veículo no momento.</p>';
}
mysqli_stmt_close($stmt);
    ?>
</p>
</div>
</aside>

<footer>
    <div class="footer-container">

      <div class="footer-section">
        <p><strong>Entre em contato</strong></p>
        <a href="https://github.com/eisandromc" target="_blank">
          <img class="instagram" src="./assests/Instagram_icon.png" alt="Instagram">
        </a>
        <a href="https://wa.me/5551994109429" target="_blank">
          <img class="whatsapp" src="./assests/pngtree-whatsapp-phone-icon-png-image_6315989.png" alt="WhatsApp">
        </a>
      </div>

      <div class="footer-section">
        <p>© SMCAR - TODOS OS DIREITOS RESERVADOS</p>
      </div>

      <div class="footer-section">
        <p>Av. Ipiranga, xxxx - Jardim Botânico, Porto Alegre - RS</p>
      </div>

    </div>
  </footer>