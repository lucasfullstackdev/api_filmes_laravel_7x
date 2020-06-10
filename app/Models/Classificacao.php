<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classificacao extends Model
{
    use SoftDeletes;

    protected $table = 'classificacao';
    protected $fillable = [
        'ds_classificacao',
        'ds_observacao',
        'ds_violencia',
        'ds_sexo_nudez',
        'ds_drogas'
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
