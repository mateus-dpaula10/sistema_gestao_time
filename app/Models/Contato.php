<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'contato_nome',
        'contato_email',
        'contato_msg',
        'contato_celular'
    ];

    protected $table = 'contatos';
}
