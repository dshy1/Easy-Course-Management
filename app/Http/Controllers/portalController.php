<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class portalController extends Controller
{
    public function HomeSite(){
        return view('site_home');
    }

    public function portalIndex(){
        $level = Auth::user()->permissao;
        
        if($level == 1){
            return view('portal.aluno.aluno-dashboard');
        }

        elseif($level == 2){
            return view('portal.professor.professor-dashboard');
        }

        elseif($level == 3){
            return view('portal.admin.admin-dashboard');
        }

        else {
            return 'OBS. Algo de errado não está certo!';
        }

    }

    public function CadastrarCurso(){
        if(Auth::user()->permissao == 3){
            return view('portal.admin.cursos.add');
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é restrita, apenas para professores.';
            return redirect()->back()->with('alerta', $alerta);   
        }
        
    }

    public function CadastrarAluno(){
        return view('portal.alunos.add');
    }
}

/* TESTE ERRO */