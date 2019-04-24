<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portalController extends Controller
{
    public function portalIndex(){
        return view('portal.dashboard');
    }

    public function CadastrarCurso(){
        return view('portal.cursos.add');
    }


    public function CadastrarAluno(){
        return view('portal.alunos.add');
    }
}
