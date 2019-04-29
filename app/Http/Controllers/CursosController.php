<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

use App\User;
use App\Curso;
use App\Turma;


class CursosController extends Controller
{
    public function CadastrarCurso(){
        if(Auth::user()->permissao == 3){
            return view('portal.admin.cursos.add');
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }
        
    }

    public function SalvarCurso(Request $request){
        if(Auth::user()->permissao == 3){
            $dados = $request->all();
            $nome_curso = $request->nome;

            Curso::create($dados);

            $sucesso = 'O curso de <b> ' . $request->nome . '</b> foi cadastrado com sucesso!';
            return redirect()->route('curso.add')->with(['sucesso' => $sucesso, 'nome' => $request->nome]); 
            
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Você não tem permissão para adicionar um curso.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }           
    }

    public function ListaCursos(){
        if(Auth::user()->permissao == 3){
            $cursos = Curso::all();
            return view('portal.admin.cursos.lista')->with(['cursos' => $cursos]);
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }
        
    }

    public function EditarCursoForm($id){
        if(Auth::user()->permissao == 3){
            $data = Curso::find($id);
            return view('portal.admin.cursos.edit')->with(['dados' => $data]);
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }
    }

    public function SalvarEditarCurso(request $request, $id){
        if(Auth::user()->permissao == 3){
            $dados = $request->all();
            $info_nome = Curso::find($id);
            Curso::find($id)->update($dados);
            $sucesso = 'O curso <b> ' . $info_nome->nome . '</b> foi editado com sucesso!';
            return redirect()->route('curso.lista')->with(['sucesso' => $sucesso]);
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }
    }

    public function DeletarCurso($id){
        if(Auth::user()->permissao == 3){
            $info_nome = Curso::find($id);
            Curso::find($id)->delete();

            $sucesso = 'O curso <b> ' . $info_nome->nome . '</b> foi deletado com sucesso!';
            return redirect()->route('curso.lista')->with(['sucesso' => $sucesso]);
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);  
        }
    }


    public function PesquisarCurso(request $request){
        if(Auth::user()->permissao == 3){
            $pesquisa = $request->q;
            $cursos = Curso::where('nome', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('portal.admin.cursos.lista')->with(['cursos' => $cursos]);
        }        
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);  
        }
    }


    /* TURMAS */

    public function TurmaLista(){
        if(Auth::user()->permissao == 3){
            $dados = Turma::all();
            return view('portal.admin.turmas.lista')->with(['dados' => $dados]);
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);
        }
    }

    public function CadastrarTurmaForm(){
        if(Auth::user()->permissao == 3){
            $professores = User::where('permissao', 2)->get();
            $cursos = Curso::all();

            return view('portal.admin.turmas.add')->with(['professores' => $professores, 'cursos' => $cursos]);
        }
        else{
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);
        }
    }

    public function SalvarCadastrarTurma(request $request){
        if(Auth::user()->permissao == 3){
            $dados = $request->all();
            Turma::create($dados);
            $sucesso = 'A turma de <b> ' . $request->nome . '</b> foi criada com sucesso!';
            return redirect()->route('turma.lista')->with(['sucesso' => $sucesso]);
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);
        }
    }

    public function EditarTurma($id){
        if(Auth::user()->permissao == 3){
            $professores = User::where('permissao', 2)->get();
            $cursos = Curso::all();
            $dados = Turma::find($id);
            $professor_nome = User::find($dados->professor_id);
            $curso_nome = Curso::find($dados->curso_id);

            return view('portal.admin.turmas.edit')->with(['dados' => $dados, 'cursos' => $cursos, 
                        'professores' => $professores, 'curso_nome' => $curso_nome, 'professor_nome' => $professor_nome]);
        }
        else{
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);
        }
    }

    public function SalvarEditarTurma(request $request, $id){
        if(Auth::user()->permissao == 3){
            $dados = $request->get();
            Turma::find($id)->update($dados);
            $sucesso = 'Editado com sucesso!';
            return redirect()->route('turma.lista')->with(['sucesso' => $sucesso]);
        }
        else{
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);
        }
    }

    public function DeletarTruma($id){
        if(Auth::user()->permissao == 3){
            $dados = Turma::find($id);
            Turma::find($id)->delete();
            $sucesso = 'A turma de <b> ' . $dados->nome . '</b> foi deletada com sucesso!';
            return redirect()->route('turma.lista')->with(['sucesso' => $sucesso]);
        }
        else{
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);
        }
    }

    public function PesquisarTurma(request $request){
        $pesquisa = $request->get('q');
        if(Auth::user()->permissao == 3){
            $result = Turma::where('id', 'LIKE', '%'.$pesquisa.'%')->orWhere('status', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('portal.admin.turmas.lista')->with(['dados' => $result]);
        }
        else{
            $alerta = '<b>' . Auth::user()->name . '</b> Essa área é apenas para admins!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);
        }
    }

    
    
}
