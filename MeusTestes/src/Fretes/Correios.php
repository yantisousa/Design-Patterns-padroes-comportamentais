<?php

namespace app\src\Fretes;

class Correios implements Frete
{
    public function calculaFrete($tamanho, $distancia): float
    {
        return ($tamanho * $distancia) / 2;
    }
}
