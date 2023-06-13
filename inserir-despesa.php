<?php

require_once 'vendor/autoload.php';

use DespensaWeb\Database\ConexaoBanco;
use DespensaWeb\Controller\DespesaController;
use DespensaWeb\Model\Despesa;

$pdo = ConexaoBanco::criadorConexao();
$despesa = new DespesaController($pdo);

$camisaDeTime = new Despesa(
    null,
    'Camisa 1 oficial - flamengo 2023',
    250,
    new DateTimeImmutable()
);


$despesa->insert($camisaDeTime);