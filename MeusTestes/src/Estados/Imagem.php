<?php

namespace app\src\Estados;

use Exception;

class Imagem implements Estados
{
    public function inserirTexto(string $texto)
    {
        return throw new Exception("Sem permissão");
    }

    public function  selecionarTexto(int $inicio, int $fim)
    {
        return throw new Exception("Sem permissão");
    }

    public function inserirImagem(string $imagem)
    {
        return $imagem;
    }
}
