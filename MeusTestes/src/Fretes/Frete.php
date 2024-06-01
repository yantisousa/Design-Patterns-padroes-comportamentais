<?php

namespace app\src\Fretes;

interface Frete
{
    public function calculaFrete($tamanho, $distancia): float;
}
