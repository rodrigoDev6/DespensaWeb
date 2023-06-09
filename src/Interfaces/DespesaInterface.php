<?php

namespace DespensaWeb\Interfaces;

use DespensaWeb\Model\Despesa;

interface DespesaInterface
{
    public function allDespesas(Despesa $despesa): array;
    public function insert(Despesa $despesa): bool;
    public function delete(Despesa $despesa): bool;
}