<?php
require 'autoload.php';

$retorno = \marcoatjunior\Yii2Boleto\Cnab\Retorno\Factory::make(__DIR__ . DIRECTORY_SEPARATOR . 'arquivos' . DIRECTORY_SEPARATOR . 'itau.ret');
$retorno->processar();

echo $retorno->getBancoNome();
dd($retorno->getDetalhes());
