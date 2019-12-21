<?php

namespace App\Traits;

trait GlobalTraits
{
    /**
     * Função para retirar tags de uma variavel
     *
     * @param $param
     * @return void
     */
    public function limpaTags($param)
    {
        return preg_replace('(<(/?[^\>]+)>)', '', $param);
    }
}