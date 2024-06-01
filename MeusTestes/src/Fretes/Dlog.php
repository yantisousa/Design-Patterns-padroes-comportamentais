<?php

namespace app\src\Fretes;

class Dlog implements Frete
{
    public function calculaFrete($tamanho, $distancia): float
    {
        return ($tamanho * $distancia + 7) / 4;
    }
}
