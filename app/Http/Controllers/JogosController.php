<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jogos;

class JogosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $jogos = Jogos::all();

        return view('jogos.listaJogo', ['jogos' => $jogos]);
    }
}
