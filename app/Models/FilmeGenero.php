<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FilmeGenero extends Model
{
    use SoftDeletes;

    protected $table = 'filme_genero';
    protected $fillable = ['filme_id', 'filme_genero'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
