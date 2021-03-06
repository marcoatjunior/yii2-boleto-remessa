<?php

namespace marcoatjunior\Yii2Boleto\Tests\Retorno;

use marcoatjunior\Yii2Boleto\Cnab\Retorno\Cnab400\Detalhe;
use marcoatjunior\Yii2Boleto\Tests\TestCase;
use Illuminate\Support\Collection;

class FactoryTest extends TestCase
{
    /**
     * @expectedException     \Exception
     */
    public function testCriarEmBranco(){
        $retorno = \marcoatjunior\Yii2Boleto\Cnab\Retorno\Factory::make('');
        $retorno->processar();
    }

    /**
     * @expectedException     \Exception
     */
    public function testCriarComRemessa(){
        $retorno = \marcoatjunior\Yii2Boleto\Cnab\Retorno\Factory::make(__DIR__ . '/files/cnab400/remessa.txt');
        $retorno->processar();
    }

    /**
     * @expectedException     \Exception
     */
    public function testCriarComPathQueNaoExiste(){
        $retorno = \marcoatjunior\Yii2Boleto\Cnab\Retorno\Factory::make(__DIR__ . '/files/cnab400/naoexiste.txt');
        $retorno->processar();
    }

    /**
     * @expectedException     \Exception
     */
    public function testCriarComRetornoBancoNaoExiste(){
        $retorno = \marcoatjunior\Yii2Boleto\Cnab\Retorno\Factory::make(__DIR__ . '/files/cnab400/retorno_banco_fake.ret');
        $retorno->processar();
    }

    public function testCriarComFile()
    {
        $retorno = \marcoatjunior\Yii2Boleto\Cnab\Retorno\Factory::make(__DIR__ . '/files/cnab400/bradesco.ret');
        $retorno->processar();
    }

    public function testCriarComString()
    {
        $retorno = \marcoatjunior\Yii2Boleto\Cnab\Retorno\Factory::make(file_get_contents(__DIR__ . '/files/cnab400/bradesco.ret'));
        $retorno->processar();
    }
}