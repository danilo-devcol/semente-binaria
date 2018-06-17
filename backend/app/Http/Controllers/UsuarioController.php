<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('usuarios')->get();
        return response()->json($usuarios);
    }

    public function insere()
    {

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
