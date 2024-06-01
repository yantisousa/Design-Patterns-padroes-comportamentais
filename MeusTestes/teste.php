<?php

require 'vendor/autoload.php';

use app\src\CalculoDoFrete;
use app\src\EditorDeTexto;
use app\src\Estados\Selecao;
use app\src\Fretes\Correios;
use app\src\SolicitacaoSuporte;
use app\src\Suporte;

// $calculo = new CalculoDoFrete();
// echo $calculo->calcularFrete(1000, 1000, new Correios());


// $suporte = new Suporte(3);
// $solicitacao = new SolicitacaoSuporte();

// echo $solicitacao->solicitarSuporte($suporte);


$editor = new EditorDeTexto();
echo $editor->inserirTexto(10, 20);
