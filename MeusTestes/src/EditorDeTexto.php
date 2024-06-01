<?php

namespace app\src;

use app\src\Estados\Edicao;
use app\src\Estados\Estados;

class EditorDeTexto
{
    public function __construct(
        protected Estados $estadoAtual = new Edicao()
    ) {
    }

    public function setEstadoAtual(Estados $estado)
    {
        $this->estadoAtual = $estado;
    }
    public function inserirTexto(string $texto)
    {
        return $this->estadoAtual->inserirTexto($texto);
    }

    public function selecionarTexto(int $inicio, int $fim)
    {
        return $this->estadoAtual->selecionarTexto($inicio, $fim);
    }

    public function inserirImagem(string $imagem)
    {
        return $this->estadoAtual->inserirImagem($imagem);
    }
}
