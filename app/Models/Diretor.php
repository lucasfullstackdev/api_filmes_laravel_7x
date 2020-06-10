<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diretor extends Model
{
    use SoftDeletes;

    protected $table = 'diretor';
    protected $fillable = ['nm_diretor']; 
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
