<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ator extends Model
{
    use SoftDeletes;

    protected $table = 'ator';
    protected $fillable = ['nm_ator'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
