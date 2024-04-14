<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    use HasFactory;

    protected $table = 'livro';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nome', 'quantidade', 'data_cadastro', 'autor'
    ];
}
