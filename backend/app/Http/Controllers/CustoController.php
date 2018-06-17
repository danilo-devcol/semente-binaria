<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustoController extends Controller
{
    public function index()
    {
        $custos = DB::table('custos')->get();
        return ['custos' => $custos];
    }
}
