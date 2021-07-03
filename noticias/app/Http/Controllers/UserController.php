<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    echo "Novo Controller Noticias";
    }

    public function idade(Request $request)
    {
        // dd($request->ano_nascimento);
        // dd($request->all);
        
        $idade=2021-$request->ano_nascimento;
        echo "Sua idade é".$idade. "anos";

    }

    public function formulario()
    {
        return view ('form');
    }
}
