<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Site\SiteServiceInterface;
use App\Traits\GlobalTraits;
use Exception;
use stdClass;

class ApiController extends Controller
{
    protected $SiteServiceInterface;

    use GlobalTraits;

    public function __construct(SiteServiceInterface $SiteServiceInterface)
    {
        $this->SiteServiceInterface = $SiteServiceInterface;
    }

    public function enviaMailContact(Request $request)
    {
        try {
            $params = new stdClass;
            $params->nome = $this->limpaTags($request->input('nome'));
            $params->email = $this->limpaTags($request->input('email'));
            $params->mensagem = $this->limpaTags($request->input('mensagem'));
        
            $this->SiteServiceInterface->enviaFormContact($params);

            return response()->json([
                'code' => 200,
                'message' => 'Seu contato foi enviado com sucesso'
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'code' => 400,
                'message' => 'Tivemos um erro interno, por favor contate o Administrador!'
            ], 400);
        }
    }
}
