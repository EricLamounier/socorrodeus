<?php

namespace App\Services;

use App\Models\livro;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LivroService {

    public function saveLivro(Request $req){
        DB::beginTransaction();

        try{
            livro::create([
                'nome' => $req->nome,
                'autor' => $req->autor,
                'data_cadastro' => Carbon::now()
            ]);
            
        }catch(Exception $err){
            DB::rollBack();
        }
    }
}