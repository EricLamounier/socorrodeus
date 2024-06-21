<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\PessoaService;
use Illuminate\Http\Request;

class Pessoa extends Controller
{
    private PessoaService $pessoaService;

    public function __construct(PessoaService $pessoa)
    {
        $this->pessoaService = $pessoa;
    }

    public function teste(Request $req){
        return $this->pessoaService->test($req);
    }

    public function cadastraPessoa(Request $req){
        return $this->pessoaService->cadastraPessoa($req);
    }
}
