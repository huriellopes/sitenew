<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    protected $table = "user_comments";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'celular',
        'email',
        'active'
    ];
}
