<?php

namespace DespensaWeb\Interfaces;

use DespensaWeb\Model\Despesa;

interface DespesaInterface
{
    public function allDespesas(): array;
    public function insert(Despesa $despesa): bool;
    public function delete(Despesa $despesa): bool;
}