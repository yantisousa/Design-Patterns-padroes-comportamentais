<?php

namespace Src;

use DomainException;
use Src\State\EmAprovacao;
use Src\State\EstadoOrcamento;

class Orcamento
{
    public function __construct(
        public float $valor,
        public int $quantidadeItens,
        public EstadoOrcamento $estadoAtual = new EmAprovacao()
    ) {
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }
    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }
    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }
}
