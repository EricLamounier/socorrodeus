<?php
namespace App\Services;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaService
{
    public function test(Request $req)
    {
        return 'ola mundo';
    }

    public function cadastraPessoa(Request $req)
    {
        DB::beginTransaction();

        try{
            return Pessoa::create([
                'nome' => $req->nome
            ]);

        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['mensagem' => 'Erro ao inserir os dados!', 'erro' => $e->getMessage()], 500);
        }
    }


    public function getPessoasValidas(Request $req)
    {

    }
}

