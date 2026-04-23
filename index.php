<?php
include 'include/conexao.php';
include 'include/header.php';
?>
  <main>

    <div class="principalCar">
      <?php
      $sql = "SELECT * FROM Veiculos WHERE Destaque = 2 LIMIT 1";
      $result = mysqli_query($conexao, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<img src="./assests/' . $row['Foto'] . '" alt="' . $row['Descricao'] . '">';
        }
      } else {
        echo '<p>Nenhum veículo em destaque no momento.</p>';
      }
      ?>
    </div>

    <h4><strong>Nossos destaques</strong></h4>

    <?php
      $sql = "SELECT * FROM Veiculos WHERE Destaque = 1 LIMIT 6";
      $result = mysqli_query($conexao, $sql);
      $veiculos = [];
      while ($row = mysqli_fetch_assoc($result)) {
        $veiculos[] = $row;
        }
      for ($i = 0; $i < count($veiculos); $i++) {
    ?>
    
    <div class="div">
      <img class="foto"
         src="./assests/<?php echo $veiculos[$i]['Foto']; ?>">
    <p>
        <?php echo $veiculos[$i]['Marca']; ?> <br>
        <?php echo $veiculos[$i]['Carroceria']; ?>
    </p>
    <p id="condicao">Condição imperdível!</p>
    <p id="preco">
        R$ <?php echo number_format($veiculos[$i]['Preco'],0,",","."); ?>
    </p>
</div>
<?php 
} 
?>


  </main>
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

</body>

</html>