<?php

namespace app\src\Estados;

interface Estados
{
    public function inserirTexto(string $texto);
    public function selecionarTexto(int $inicio, int $fim);
    public function inserirImagem(string $imagem);
}
