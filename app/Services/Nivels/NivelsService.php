<?php

namespace App\Services\Nivels;

use App\Interfaces\Nivels\NivelsRepositoryInterface;
use App\Interfaces\Nivels\NivelsServiceInterface;
use Exception;
use Illuminate\Support\Collection;

class NivelsService implements NivelsServiceInterface
{
    /**
     * @var NivelsRepositoryInterface
     */
    protected $NivelsRepositoryInterface;

    /**
     * Construtor da Service
     *
     * @param NivelsRepositoryInterface $NivelsRepositoryInterface
     */
    public function __construct(NivelsRepositoryInterface $NivelsRepositoryInterface)
    {
        $this->NivelsRepositoryInterface = $NivelsRepositoryInterface;
    }

    /**
     * Lista os niveis de acesso
     *
     * @return Collection
     */
    public function listNivels() : Collection
    {
        try {
            return $this->NivelsRepositoryInterface->listNivels();
        } catch (Exception $exception) {
            throw new Exception('Erro ao listar os niveis de acesso!', 400);
        }
    }
}
