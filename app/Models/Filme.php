<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filme extends Model
{
    use SoftDeletes;
    
    protected $table = 'filme';
    protected $fillable = ['titulo', 'dt_lancamento', 'duracao', 'classificacao_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
