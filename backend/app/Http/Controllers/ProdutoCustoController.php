<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoCustoController extends Controller
{
    public function index()
    {
        $produtoscustos = DB::table('produtos_custos')->get();
        return ['produtos_custos' => $produtoscustos];
    }
}
