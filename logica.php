<?php

function pesquisar($termo) {
    // Array com dados de exemplo
    $dados = [
        ['id' => 1, 'nome' => 'Carro A', 'marca' => 'Toyota', 'ano' => 2020],
        ['id' => 2, 'nome' => 'Carro B', 'marca' => 'Honda', 'ano' => 2021],
        ['id' => 3, 'nome' => 'Carro C', 'marca' => 'Ford', 'ano' => 2022],
        ['id' => 4, 'nome' => 'Carro D', 'marca' => 'BMW', 'ano' => 2023],
    ];
    
    $resultados = [];
    
    // Filtrar resultados
    foreach ($dados as $item) {
        if (stripos($item['nome'], $termo) !== false || 
            stripos($item['marca'], $termo) !== false) {
            $resultados[] = $item;
        }
    }
    
    return $resultados;
}

// Uso
if (isset($_GET['pesquisa'])) {
    $termo = $_GET['pesquisa'];
    $resultados = pesquisar($termo);
    
    foreach ($resultados as $resultado) {
        echo "ID: " . $resultado['id'] . " - " . $resultado['nome'] . " (" . $resultado['marca'] . ")<br>";
    }
}

?>