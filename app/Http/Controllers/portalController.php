<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class portalController extends Controller
{
    public function HomeSite(){
        return view('site_home');
    }

    public function portalIndex(){
        $level = Auth::user()->permissao;

        if($level = 3){
            return view('portal.dashboard');
        }
        elseif($level = 2){
            return view('portal.dashboard');
        }
        elseif($level = 1){
            return view('portal.dashboard');
        }
        else {
            return 'OBS. Algo de errado não está certo!';
        }



        
    }

    public function CadastrarCurso(){
        return view('portal.cursos.add');
    }

    public function CadastrarAluno(){
        return view('portal.alunos.add');
    }
}
