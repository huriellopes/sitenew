<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    protected $table = "marketings";

    protected $primaryKey = "id";

    protected $fillable = [
        'email'
    ];
}
