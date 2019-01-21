<?php
namespace marcoatjunior\Yii2Boleto\Cnab\Retorno\Cnab400\Banco;

use marcoatjunior\Yii2Boleto\Cnab\Retorno\Cnab400\AbstractRetorno;
use marcoatjunior\Yii2Boleto\Contracts\Boleto\Boleto as BoletoContract;
use marcoatjunior\Yii2Boleto\Contracts\Cnab\RetornoCnab400;
use marcoatjunior\Yii2Boleto\Util;

class Banrisul extends AbstractRetorno implements RetornoCnab400
{
    /**
     * Código do banco
     *
     * @var string
     */
    protected $codigoBanco = BoletoContract::COD_BANCO_BANRISUL;



    protected function processarHeader(array $header)
    {
        return true;
    }

    protected function processarDetalhe(array $detalhe)
    {
        return true;
    }

    protected function processarTrailer(array $trailer)
    {
        return true;
    }
}
