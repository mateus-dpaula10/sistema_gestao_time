<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'titulo', 
        'formFile'
    ];

    protected $table = 'fotos';

    protected $dates = ['deleted_at'];
}
