<?php
namespace marcoatjunior\Yii2Boleto\Contracts\Cnab;

interface Remessa extends Cnab
{
    public function gerar();
}
