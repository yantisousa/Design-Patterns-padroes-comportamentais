<?php

namespace Src\State;

use DomainException;
use Src\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Um Orçamento finaizado não pode receber desconto');
    }
}
