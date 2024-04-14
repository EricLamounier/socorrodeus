<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaLivro extends Model
{
    use HasFactory;

    protected $table = 'tb_pessoa_livro';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'pessoa_id', 'livro_id', 'data_inicial', 'data_final'
    ];

    public function pessoa(){
        return $this->hasMany(pessoa::class, 'id', 'pessoa_id');
    }

    public function livro(){
        return $this->hasMany(livro::class, 'id', 'livro_id');
    }
}
