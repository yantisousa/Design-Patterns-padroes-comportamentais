<?php

namespace app\src\NiveisSuporte;

class Nivel1 extends NiveisSuporte
{
    public function __construct($suporte)
    {
        parent::__construct($suporte);
    }
    public function nivelSuporte($suporte)
    {
        if ($suporte->tipoSuporte === 1) {
            return "Suporte nivel 1";
        }
        return $this->proximoNivel->nivelSuporte($suporte);
    }
}
