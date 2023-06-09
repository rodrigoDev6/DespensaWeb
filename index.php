<?php

use DespensaWeb\Controller\DespesaController;
use DespensaWeb\Database\ConexaoBanco;

date_default_timezone_set('America/Sao_paulo');
require_once 'vendor/autoload.php';

$connection = ConexaoBanco::criadorConexao();
$despesa = new DespesaController($connection);

$camisaNova = new \DespensaWeb\Model\Despesa(
    null,
    'Camisa do Flamengo',
    86.43,
    new DateTimeImmutable()
);


$despesa->insert($camisaNova);

exit();
$despesas = [];

$camisaNova = new \DespensaWeb\Model\Despesa(
    null,
    "Camisa manga longa Flamengo 2023 ",
    86.43,
    new DateTimeImmutable()
);
$despesas[] = $camisaNova;

$foneNovo = new \DespensaWeb\Model\Despesa(
    null,
    'Redmi Air dots',
    40.72,
    new DateTimeImmutable()
);

$despesas[] = $foneNovo;

//var_dump($despesas);

foreach ($despesas as $d) {

}
