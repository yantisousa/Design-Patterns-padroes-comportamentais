<?php

namespace Src;

use Src\Descontos\DescontoMaisDe500Reais;
use Src\Descontos\DescontoMaisDe5Itens;
use Src\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento)
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
