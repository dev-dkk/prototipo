<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlePrototipo extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function telaCoordenador()
    {
        return view('coordenador');
    }
    public function detalhesReuniao()
    {
        return view('detalhes'); 
    }
    public function inicioProfessor()
    {
        return view('professor');
    }
    public function cadastrarReuniao()
    {
        return view('cadastro');
    }

}
