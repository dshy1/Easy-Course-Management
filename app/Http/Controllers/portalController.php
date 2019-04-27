<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Curso;
use App\User;

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
            
           //$users = DB::table('users')->where('votes', 100)->get();
           // $users = User::all()->except(Auth::user()->id);

           $users = User::where('permissao',1)->get();          
           return view('portal.admin.admin-dashboard')->with(array('users'=>$users));
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

            return redirect()->route('curso.add');
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Você não tem permissão para adicionar um curso.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }       
        
    }

    public function CadastrarAluno(){
        return view('portal.admin.alunos.add');
    }

    public function SalvarCadastrarAluno(Request $request){
        if(Auth::user()->permissao == 3){

            $aluno = new User();
            $aluno->name = $request->input('nome');
            $aluno->email = $request->input('email');
            $aluno->data_nasc = $request->input('data_nasc');
            $pass = $request->input('logradouro');
            $crypt_pass = Hash::make($pass);
            $aluno->password = $crypt_pass;
            $aluno->save();

        return redirect()->route('aluno.add');
        }
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Você não tem permissão para adicionar um curso.';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }  
    }
}
