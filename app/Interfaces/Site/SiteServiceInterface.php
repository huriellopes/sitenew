<?php

namespace App\Interfaces\Site;

use stdClass;

interface SiteServiceInterface
{
    /**
     * Envia o Formulário de Contato
     *
     * @param stdClass $params
     * @return void
     */
    public function enviaFormContact(stdClass $params);
}