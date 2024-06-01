<?php

require 'vendor/autoload.php';

use app\src\CalculoDoFrete;
use app\src\Fretes\Correios;


$calculo = new CalculoDoFrete();
echo $calculo->calcularFrete(1000, 1000, new Correios());
