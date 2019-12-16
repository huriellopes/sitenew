<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = "nivels";

    protected $primaryKey = "id";

    protected $fillables = [
        'nivel',
        'descricao'
    ];
}
