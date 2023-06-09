<?php

namespace DespensaWeb\Model;

class Despesa
{
    private ?int $id;
    private string $descricao;
    private float $valor;
    private \DateTimeImmutable $dataDaDespesa;

    public function __construct(?int $id, string $descricao, float $valor, \DateTimeImmutable $dataDaDespesa)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->dataDaDespesa = $dataDaDespesa;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDataDaDespesa(): \DateTimeImmutable
    {
        return $this->dataDaDespesa;
    }

}