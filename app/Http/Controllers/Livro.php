<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\LivroService;
use Illuminate\Http\Request;

class Livro extends Controller
{

    private LivroService $livroService;

    public function __construct(LivroService $livro){
        $this->livroService = $livro;
    }

    public function saveLivro(Request $request){
        dd('testee');
        $this->livroService->saveLivro($request);
    }
}
