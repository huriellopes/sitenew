<?php

namespace App\Interfaces\Nivels;

use Illuminate\Support\Collection;

interface NivelsServiceInterface
{
    public function listNivels() : Collection;
}
