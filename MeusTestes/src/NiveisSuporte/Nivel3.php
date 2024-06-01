<?php

namespace app\src\NiveisSuporte;

class Nivel3 extends NiveisSuporte
{
    public function nivelSuporte($suporte)
    {
        if ($suporte->tipoSuporte === 3) {
            return "Suporte nivel 3";
        }

        return $this->proximoNivel->nivelSuporte($suporte);
    }
}
