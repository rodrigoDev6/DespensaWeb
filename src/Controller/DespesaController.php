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


    public function allDespesas(): array
    {
        $sqlSelect = "SELECT * FROM despesas;";
        $despesas = $this->connection->query($sqlSelect);

        return $this->listaDeDespesaHistratada($despesas);
    }

    public function listaDeDespesaHistratada(\PDOStatement $dlc): array
    {
        $despesasLista = [];
        $despesasDados = $dlc->fetchAll();

        foreach ($despesasDados as $despesaDado) {
            $despesasLista[] = new Despesa(
                $despesaDado['id'],
                $despesaDado['descricao'],
                $despesaDado['valor'],
                new \DateTimeImmutable($despesaDado['data_da_despesa'])
            );
        }

        return $despesasLista;
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
        $dlc = $this->connection->prepare("DELETE FROM despesas WHERE id = ?;");
        $dlc->bindValue(1, $despesa->getId(), PDO::PARAM_INT);

        if ($dlc->execute() == true) {
            echo "Removido com sucesso";
        }
        return $dlc->execute();
    }
}