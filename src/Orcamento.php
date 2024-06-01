<?php

namespace Src;

class Orcamento
{
    public function __construct(
        public float $valor,
        public int $quantidadeItens
    ) {
    }
}
