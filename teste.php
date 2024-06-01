<?php

use Src\CalculadoraDeImpostos;
use Src\Impostos\Iss;
use Src\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());
