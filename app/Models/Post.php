<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $primaryKey = "id";

    protected $fillable = [
        'titulo',
        'path_miniatura',
        'corpo',
        'active',
        'id_user',
        'deleted_at'
    ];
}
