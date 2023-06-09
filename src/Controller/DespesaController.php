<?php

namespace DespensaWeb\Controller;

use DespensaWeb\Interfaces\DespesaInterface;
use DespensaWeb\Model\Despesa;
use DespensaWeb\Database\ConexaoBanco;
use PDO;
class DespesaController implements DespesaInterface
{

    private PDO $connection;
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }


    public function allDespesas(Despesa $despesa): array
    {
        $sqlSelect = "SELECT * FROM despesas;";
        return $a;
    }

    public function insert(Despesa $despesa): bool
    {
        $sqlInsert = "INSERT INTO despesas (descricao, valor, data_da_despesa) VALUES (:descricao, :valor, :data_da_despesa);";
        $dlc = $this->connection->prepare($sqlInsert);

        $success = $dlc->execute([
            ':descricao' => $despesa->getDescricao(),
            ':valor' => $despesa->getValor(),
            ':data_da_despesa' => $despesa->getDataDaDespesa()->format('d/m/y H:i:s')
        ]);

        echo "Inserido com sucesso";

        return $success;
    }

    public function delete(Despesa $despesa): bool
    {
        return true;
    }
}