<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FilmeDiretor extends Model
{
    use SoftDeletes;

    protected $table = 'filme_diretor';
    protected $fillable = ['filme_id', 'diretor_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
