<?php

namespace app\src\Estados;

use Exception;

class Selecao implements Estados
{
    public function inserirTexto(string $texto)
    {
        return throw new Exception("Sem permissão");
    }

    public function  selecionarTexto(int $inicio, int $fim)
    {
        return "Cortando texto em $inicio até $fim";
    }

    public function inserirImagem(string $imagem)
    {
        return throw new Exception("Sem permissão");
    }
}
