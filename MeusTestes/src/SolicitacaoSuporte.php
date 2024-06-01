<?php

namespace app\src;

use app\src\NiveisSuporte\Nivel1;
use app\src\NiveisSuporte\Nivel2;
use app\src\NiveisSuporte\Nivel3;
use app\src\NiveisSuporte\SemSuporte;

class SolicitacaoSuporte
{
    public function solicitarSuporte($suporte)
    {
        $niveis = new Nivel1(
            new Nivel2(
                new Nivel3(
                    new SemSuporte
                )
            )
        );
        return $niveis->nivelSuporte($suporte);
    }
}
