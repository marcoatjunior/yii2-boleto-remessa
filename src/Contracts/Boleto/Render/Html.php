<?php
namespace marcoatjunior\Yii2Boleto\Contracts\Boleto\Render;

interface Html
{
    public function getImagemCodigoDeBarras($codigo_barras);

    public function gerarBoleto();
}
