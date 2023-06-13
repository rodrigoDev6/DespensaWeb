<?php

require_once 'vendor/autoload.php';

use DespensaWeb\Database\ConexaoBanco;



try {
    $pdo = ConexaoBanco::criadorConexao();

    $sqlTabelaDespesa = "CREATE TABLE IF NOT EXISTS despesas ( id INT AUTO_INCREMENT PRIMARY KEY, descricao VARCHAR(255) NOT NULL, valor DECIMAL(10, 2) NOT NULL, data_da_despesa DATETIME NOT NULL);";
    $stmt = $pdo->query($sqlTabelaDespesa);

    echo "Tabela Criada com sucesso";
} catch (\RuntimeException $e) {
    echo "Deu ruim" . PHP_EOL;
    echo $e->getMessage();
}