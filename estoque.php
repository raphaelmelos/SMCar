<?php
include_once "./include/conexao.php";
include_once "funcoes.php";

$marca = isset($_GET['marca']) ? $_GET['marca'] : "";

$result = buscarVeiculos($conexao, $marca);
?>

<?php
include_once "./include/header.php";
?>

    <!-- MAIN -->

    <h1><Strong>Estoque de Veículos</Strong></h1>


    <main class="estoque">
        
     <p>Filtrar por marcas</p>   
    <form method="GET">
        <button name="marca" value="Volkswagen">Volkswagen</button>
        <button name="marca" value="Fiat">Fiat</button>
        <button name="marca" value="Chevrolet">Chevrolet</button>
        <button name="marca" value="Hyundai">Hyundai</button>
        <button name="marca" value="Toyota">Toyota</button>
        <button name="marca" value="">Todas</button>
    </form>

        <h2>Veículos Disponíveis</h2>

        <div id="lista-veiculos">
<?php
while ($row = $result->fetch_assoc()) {
?>
    <div class="card">
        <img src="<?php echo $row['imagem']; ?>" alt="">
        <h3><?php echo $row['nome']; ?></h3>
        <p><strong>Marca:</strong> <?php echo $row['marca']; ?></p>
        <p><strong>Ano:</strong> <?php echo $row['ano']; ?></p>
        <p><strong>Preço:</strong> R$ <?php echo $row['preco']; ?></p>
    </div>
<?php
}
?>
</div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">

            <div class="footer-section">
                <p><strong>Entre em contato</strong></p>
                <a href="https://github.com/eisandromc" target="_blank">
                    <img class="instagram" src="assests/Instagram_icon.png" alt="Instagram">
                </a>
                <a href="https://wa.me/5551994109429" target="_blank">
                    <img class="whatsapp" src="assests/pngtree-whatsapp-phone-icon-png-image_6315989.png"
                        alt="WhatsApp">
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
    <!-- SCRIPT -->
    <script>
        const veiculos = [
            {
                id: 1,
                nome: "Diablo",
                marca: "Lamborghini",
                ano: 1998,
                preco: 2.700000,
                imagem: "img/diablo.jpg"
            },
            {
                id: 2,
                nome: "NSX",
                marca: "Honda",
                ano: 1990,
                preco: 3.200000,
                imagem: "img/nsx.jpg"
            },
            {
                id: 3,
                nome: "Testarossa",
                marca: "Ferrari",
                ano: 1990,
                preco: 2.700000,
                imagem: "img/testarossa.png"
            },
            {
                id: 4,
                nome: "959",
                marca: "Porsche",
                ano: 1989,
                preco: 2000000,
                imagem: "img/porsche.jpg"
            }
        ];

        function listarVeiculos() {
            const lista = document.getElementById("lista-veiculos");
            lista.innerHTML = "";

            for (let i = 0; i < veiculos.length; i++) {
                const v = veiculos[i];

                const card = document.createElement("div");
                card.classList.add("card");

                card.innerHTML = `
            <img src="${v.imagem}" alt="${v.nome}">
            <h3>${v.nome}</h3>
            <p><strong>Marca:</strong> ${v.marca}</p>
            <p><strong>Ano:</strong> ${v.ano}</p>
            <p><strong>Preço:</strong> R$ ${v.preco}</p>
        `;

                lista.appendChild(card);
            }
        }

        listarVeiculos();
    </script>

</body>

</html>