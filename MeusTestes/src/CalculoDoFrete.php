<?php

namespace app\src;

use app\src\Fretes\Frete;

class CalculoDoFrete
{
    public function calcularFrete($tamanho, $distancia, Frete $frete)
    {
        return $frete->calculaFrete($tamanho, $distancia);
    }
}
