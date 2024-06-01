<?php

namespace app\src\NiveisSuporte;

class SemSuporte extends NiveisSuporte
{
    public function __construct()
    {
        parent::__construct(null);
    }
    public function nivelSuporte($suporte)
    {
        return 0;
    }
}
