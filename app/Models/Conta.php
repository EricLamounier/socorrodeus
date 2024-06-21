<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;
    protected $table = 'conta';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id', 'nome', 'valor', 'data', 'situacao', 'tipo', 'data_criacao', 'pessoa_id_fk',
    ];
}
