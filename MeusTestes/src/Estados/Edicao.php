<?php

namespace app\src\Estados;

use Exception;

class Edicao implements Estados
{
    public function inserirTexto(string $texto)
    {
        return "Inserindo texto: $texto";
    }

    public function  selecionarTexto(int $inicio, int $fim)
    {
        return throw new Exception("Sem permissão");
    }

    public function inserirImagem(string $imagem)
    {
        return throw new Exception("Sem permissão");
    }
}
