<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaidaController extends Controller
{
    public function index()
    {
        $saidas = DB::table('saidas')->get();
        return response()->json($saidas);
    }

    public function insere(Request $request)
    {
        $inputs = $request->all();
        $data = $inputs['data'];
        $valor = $inputs['valor'];
        $idusuario = $inputs['idusuario'];
        $idcusto = $inputs['idproduto'];
        $inserted = DB::insert('insert into saidas (`data`, `valor`, `idusuario`, `idproduto`) values (? , ?, ?, ?)',
            [$data, $valor, $idusuario, $idcusto]);
        if($inserted) {
            return response()->json(['status'=>true, 'message'=>'Salvo com sucesso.']);
        } else {
            return response()->json(['status'=>false, 'message'=>'Não foi possível salvar saída']);
        }
    }

    public function atualiza()
    {

    }

    public function remove()
    {

    }

    public function getById()
    {

    }
}
