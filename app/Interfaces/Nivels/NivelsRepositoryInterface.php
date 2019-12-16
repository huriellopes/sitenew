<?php

namespace App\Interfaces\Nivels;

use Illuminate\Support\Collection;

interface NivelsRepositoryInterface
{
    public function listNivels() : Collection;
}
