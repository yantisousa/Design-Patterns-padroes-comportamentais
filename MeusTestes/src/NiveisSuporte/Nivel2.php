<?php

namespace app\src\NiveisSuporte;

class Nivel2 extends NiveisSuporte
{
    public function nivelSuporte($suporte)
    {
        if ($suporte->tipoSuporte === 2) {
            return "Suporte nivel 2";
        }

        return $this->proximoNivel->nivelSuporte($suporte);
    }
}
