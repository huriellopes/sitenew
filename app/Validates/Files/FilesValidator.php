<?php

namespace App\Validates\Files;

use Exception;
use Illuminate\Support\Facades\Validator;

class FilesValidator
{
    public static function rules()
    {
        return [
            'arquivo' => 'required|mimes:mp4,jpg,jpeg,png,pdf|mimetypes:video/mp4,image/jpg,image/jpeg,image/png,aplication/pdf',
        ];
    }

    public static function message()
    {
        return [
            'arquivo.required' => 'O campo de arquivo é obrigatório',
            'arquivo.mimes' => 'Arquivo inválido',
            'arquivos.mimetypes' => 'O tipo do arquivo é inválido'
        ];
    }

    public function validaArquivo($params)
    {
        $validator = Validator::make((array) $params, self::rules(), self::message());

        if ($validator->fails()) {
            throw new Exception('Erro ao validar o arquivo!', 400);
        }
    }
}
