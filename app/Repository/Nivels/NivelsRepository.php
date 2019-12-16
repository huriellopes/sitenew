<?php

namespace App\Repository\Nivels;

use App\Interfaces\Nivels\NivelsRepositoryInterface;
use App\Models\Nivel;
use Illuminate\Support\Collection;

class NivelsRepository implements NivelsRepositoryInterface
{
    /**
     * Lista todos os niveis de acesso
     *
     * @return Collection
     */
    public function listNivels() : Collection
    {
        return Nivel::all();
    }
}
