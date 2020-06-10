<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use SoftDeletes;
    
    protected $table = 'genero';
    protected $fillable = ['ds_genero'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
