<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portalController extends Controller
{
    public function portalIndex(){
        return view('portal.dashboard');
    }

    public function AdicionarCurso(){
        return view('portal.cursos.add');
    }
}
