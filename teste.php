<?php

use Src\CalculadoraDeDescontos;
use Src\CalculadoraDeImpostos;
use Src\Impostos\Icpp;
use Src\Impostos\Iss;
use Src\Orcamento;

require 'vendor/autoload.php';

// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Iss());
// $calculadora = new CalculadoraDeDescontos();
// $orcamento = new Orcamento(700, 4);
// echo $calculadora->calculaDescontos($orcamento);

$orcamento = new Orcamento(200, 5);

$imposto = new Icpp();
echo $imposto->calculaImposto($orcamento);
