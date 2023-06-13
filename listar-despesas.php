<?php

require_once 'vendor/autoload.php';

use DespensaWeb\Database\ConexaoBanco;
use DespensaWeb\Controller\DespesaController;

$pdo = ConexaoBanco::criadorConexao();
$depesas = new DespesaController($pdo);
$listaDeDespesas = $depesas->allDespesas();


var_dump($listaDeDespesas);
