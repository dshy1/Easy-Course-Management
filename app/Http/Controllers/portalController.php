<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use App\Curso;

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
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }
        
    }

    public function SalvarCadastrarCurso(Request $request){
        if(Auth::user()->permissao == 3){
            $curso = new Curso();
            $curso->nome = $request->input('nome');
            $curso->duracao = $request->input('duracao');
            $curso->save();

        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Você não tem permissão para adicionar um curso.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }
        
    }

    public function CadastrarAluno(){
        return view('portal.admin.alunos.add');
    }
}
