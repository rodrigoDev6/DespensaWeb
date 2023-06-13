<?php

require_once 'vendor/autoload.php';

use DespensaWeb\Database\ConexaoBanco;
use DespensaWeb\Controller\DespesaController;
use DespensaWeb\Model\Despesa;

$pdo = ConexaoBanco::criadorConexao();
$despesa = new DespesaController($pdo);

$camisaFlamengo = new Despesa(
    5,
    '',
    0,
    new DateTimeImmutable()
);

$despesa->delete($camisaFlamengo);