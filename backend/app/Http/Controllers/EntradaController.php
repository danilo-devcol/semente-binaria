<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntradaController extends Controller
{
    public function index()
    {
        $entradas = DB::table('entradas')->get();
        return response()->json($entradas);
    }

    public function insere(Request $request)
    {
        $inputs = $request->all();
        $data = $inputs['data'];
        $valor = $inputs['valor'];
        $idusuario = $inputs['idusuario'];
        $idcusto = $inputs['idcusto'];
        $inserted = DB::insert('insert into entradas (`data`, `valor`, `idusuario`, `idcusto`) values (? , ?, ?, ?)',
            [$data, $valor, $idusuario, $idcusto]);
        if($inserted) {
            return response()->json(['status'=>true, 'message'=>'Salvo com sucesso.']);
        } else {
            return response()->json(['status'=>false, 'message'=>'Não foi possível salvar entrada']);
        }
    }

    public function getByUsuario(Request $request)
    {
        $id = $request->query('idusuario');
        $entradas = DB::table('entradas')->get()->where('idusuario', $id);
        return response()->json($entradas);
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
