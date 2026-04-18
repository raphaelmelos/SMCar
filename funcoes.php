
<?php
function buscarVeiculos($conexao, $marca = null) {

    if (!empty($marca)) {
        $stmt = $conexao->prepare("SELECT * FROM veiculos WHERE marca = ?");
        $stmt->bind_param("s", $marca);
        $stmt->execute();
        return $stmt->get_result();
    } else {
        return $conexao->query("SELECT * FROM veiculos");
    }

}
?>
