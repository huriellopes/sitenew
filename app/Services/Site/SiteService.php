<?php

namespace App\Services\Site;

use App\Interfaces\Site\SiteServiceInterface;
use App\Mail\EnviaMail;
use Exception;
use stdClass;
use Illuminate\Support\Facades\Mail;
use App\Validates\ContactForm\ContactValidate;

class SiteService implements SiteServiceInterface
{
    protected $ContactFormValidate;

    public function __construct(ContactValidate $contactFormValidate)
    {
        $this->ContactFormValidate = $contactFormValidate;
    }

    /**
     * Envia o formulário de contato
     *
     * @param stdClass $params
     * @return void
     */
    public function enviaFormContact(stdClass $params)
    {
        try {
            $this->ContactFormValidate->validaContactForm($params);

            return Mail::to(env('MAIL_FROM_ADDRESS'))->send(new EnviaMail((array) $params));
        } catch (Exception $exception) {
            throw new Exception("Error ao enviar o formulário de contato", 400);
            
        }
    }
}