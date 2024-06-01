<?php

namespace app\src\NiveisSuporte;

abstract class NiveisSuporte
{
    protected $proximoNivel;

    public function __construct($suporte = null)
    {
        $this->proximoNivel = $suporte;
    }

    //Isso está servindo somente para que cada classe que herdar NiveisSuporte
    //use esse metodo obrigatoriamente.
    abstract public function nivelSuporte($suporte);
}
