<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";

    protected $primaryKey = "id";

    protected $fillables = [
        'nome',
        'email',
        'senha',
        'ativo',
        'idnivel'
    ];

    public function nivel()
    {
        return $this->hasOne(Nivel::class, 'id', 'idnivel');
    }
}
