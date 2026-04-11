<?php
function buscarVeiculos($conn, $marca = null) {

    if (!empty($marca)) {
        $stmt = $conn->prepare("SELECT * FROM veiculos WHERE marca = ?");
        $stmt->bind_param("s", $marca);
        $stmt->execute();
        return $stmt->get_result();
    } else {
        return $conn->query("SELECT * FROM veiculos");
    }

}
?>