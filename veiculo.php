<?php
include 'include/conexao.php';
include 'include/header.php';
?>

<main>
    <?php
    $sql = "SELECT * FROM Veiculos WHERE id_Veiculos = :id_Veiculos LIMIT 1 ";
    $result = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<img src="./assests/' . $row['Foto'] . '" alt="' . $row['Descricao'] . '">';
        }
    } else {
        echo '<p>Nenhuma foto do veículo no momento.</p>';
    }
    ?>
</main>

<aside>

<h2>Especificações</h2>
    
<div>
<p>
    <?php
    $sql = "SELECT * FROM Veiculos WHERE id_Veiculos = :id_Veiculos";
    $result = mysqli_query($conexao, $sql);
    $veiculos = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $veiculos[] = $row;
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $veiculos[$i]['Ano'];
          echo $veiculos[$i]['Kms']; 
          echo $veiculos[$i]['Cambio']; 
          echo $veiculos[$i]['Cor']; 
          echo $veiculos[$i]['Carroceria']; 
          echo number_format($veiculos[$i]['Preco'],0,",",".");;
          echo $veiculos[$i]['Marca'];
        }
    } else {
        echo '<p>Nenhuma informação sobre o veículo no momento.</p>';
    }
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