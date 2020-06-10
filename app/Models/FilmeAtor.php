<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FilmeAtor extends Model
{
    use SoftDeletes;

    protected $table = 'filme_ator';
    protected $fillable = ['filme_id', 'ator_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
