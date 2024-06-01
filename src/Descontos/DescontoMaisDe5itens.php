<?php

namespace Src\Descontos;

use Src\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    private $desconto;
    public function __construct(Desconto $desconto)
    {
        $this->desconto = $desconto;
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->quantidadeItens * 0.1;
        }

        return $this->desconto->calculaDesconto($orcamento);
    }
}
