<?php

namespace App\Validates\ContactForm;

use Illuminate\Support\Facades\Validator;
use Exception;

class ContactValidate
{
    public static function rules()
    {
        return [
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required'
        ];
    }

    public static function message()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Digite um email válido',
            'mensagem.required' => 'O campo mensagem é obrigatório'
        ];
    }

    public function validaContactForm($params)
    {
        $validator = Validator::make((array) $params, self::rules(), self::message());
        
        if ($validator->fails()) {
            throw new Exception('Erro ao validar o formulário de contato!', 400);
        }
    }
}