<?php

namespace App\Validates\Users;

use Exception;
use Illuminate\Support\Facades\Validator;

class UsersValidate
{
    public static function rulesAll()
    {
        return [
            'nome' => 'required|string',
            'email' => 'required|email:filter|regex:/^.+@.+$/i',
            'password' => 'required',
            //'ativo' => 'required|int',
            'idnivel' => 'required|int'
        ];
    }

    public static function ruleVerifyLogin()
    {
        return [
            'email' => 'required|email:filter|regex:/^.+@.+$/i',
            'password' => 'required'
        ];
    }

    public static function messageAll()
    {}

    public static function messageVerifyLogin()
    {
        return [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O email é inválido',
            'password.required' => 'O campo senha é obrigatório',
        ];
    }

    public function validaAll($params)
    {
        $validator = Validator::make((array) $params, self::rulesAll(), self::messageAll());

        if ($validator->fails()) {
            throw new Exception('Erro ao validar os campos de cadastro de usuário!', 400);
        }
    }

    /**
     * Valida o login
     *
     * @param Array $params
     * @return void
     */
    public function validaVerifyLogin($params)
    {
        $validator = Validator::make((array) $params, self::ruleVerifyLogin(), self::messageVerifyLogin());

        if ($validator->fails()) {
            throw new Exception('Erro ao validar o login!', 400);
        }
    }

    /**
     * Valida E-Mail
     *
     * @param [type] $email
     * @return void
     */
    public function validaEmail($email)
    {
        $regex = preg_match("/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i", $email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !$regex) {
            throw new Exception('Email é inválido!', 400);
        }
    }
}
