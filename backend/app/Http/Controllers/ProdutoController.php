<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller
{
    public function index()
    {
        $categoria = Input::get('idcategoria');

        if($categoria) {
            $orodutos = DB::table('produtos')->get()->where('idcategoria', '=', $categoria);
        } else {
            $orodutos = DB::table('produtos')->get();
        }
        return ['produtos' => $orodutos];
    }
}
