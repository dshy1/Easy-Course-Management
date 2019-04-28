<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;

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
            
           // $users = DB::table('users')->where('votes', 100)->get();
           // $users = User::all()->except(Auth::user()->id);

           $users = User::where('permissao',1)->get();          
           return view('portal.admin.admin-dashboard')->with(['users'=>$users]);
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


    /* START FUNÇÕES ADMIN > ALUNOS */


    public function ListaAlunos(){
        if(Auth::user()->permissao == 3){
            $users = User::where('permissao',1)->get();          
            return view('portal.admin.alunos.lista')->with(['users'=>$users]);
         }
    }

    public function CadastrarAlunoForm(){
        return view('portal.admin.alunos.add');
    }




    
    /* 
    
    ABAIXO, FAZER PARA QUANDO DER ERRO, 
    OS CAMPOS VOLTEM PREENCHIDOS
    
    */

    public function CadastrarAlunoSalvar(Request $request){
        if(Auth::user()->permissao == 3){
            $users = $request->all();
            // VERIFICA SE AS SENHAS CONFEREM
            if($request->input('senha') != $request->input('senha2')){
                $alerta = 'As senhas não conferem!';
                return redirect()->route('aluno.add')->with(['alerta' => $alerta, 'user' => $users]);   
            } 
            else {
                // VERIFICA SE O EMAIL JA EXISTE NO BANCO DE DADOS
                $email = $request->input('email');
                $banco = User::where('email', $email)->get('email');
                

                foreach($banco as $f_banco){
                    if($f_banco->email == $email){
                        $alerta = 'O email digitado já está cadastrado! - ' . $f_banco->email;
                        return redirect()->route('aluno.add')->with(['alerta' => $alerta, 'user' => $users]);   
                    }
                    else{

                    }
                }
            
            $aluno = new User();
            $aluno->name = $request->input('name');
            $aluno->email = $request->input('email');
            $aluno->data_nasc = $request->input('data_nasc');
            $aluno->CPF = $request->input('cpf');
            $aluno->logradouro = $request->input('logradouro');
            $aluno->numero = $request->input('numero');
            $aluno->bairro = $request->input('bairro');
            $aluno->pais = $request->input('pais');
            $aluno->uf = $request->input('uf');
            $aluno->telefone1 = $request->input('telefone1');
            $aluno->telefone2 = $request->input('telefone2');

            $pass = $request->input('senha');
            $crypt_pass = Hash::make($pass);
            $aluno->password = $crypt_pass;
            $aluno->save();

            $sucesso = 'O aluno <b> ' . $aluno->name . '</b> foi cadastrado com sucesso!';
            return redirect()->route('aluno.add')->with(['sucesso' => $sucesso, 'nome' => $aluno->nome]);   

            }  
        }

        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Você não tem permissão para cadastrar um aluno!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }  
    }

    public function EditarAlunoForm($id){
        $edit = 'edit';
        $users = User::find($id);
        return view('portal.admin.alunos.edit')->with(['edit' => $edit, 'user' => $users]);
    }

    public function EditarAlunoSalvar(){
        if(Auth::user()->permissao == 3){                
            $aluno = new User();
            $aluno->name = $request->input('name');
            $aluno->data_nasc = $request->input('data_nasc');
            $aluno->CPF = $request->input('cpf');
            $aluno->logradouro = $request->input('logradouro');
            $aluno->numero = $request->input('numero');
            $aluno->bairro = $request->input('bairro');
            $aluno->pais = $request->input('pais');
            $aluno->uf = $request->input('uf');
            $aluno->uf = $request->input('municipio');
            $aluno->telefone1 = $request->input('telefone1');
            $aluno->telefone2 = $request->input('telefone2');

            $aluno->save();

            $sucesso = 'O aluno <b> ' . $aluno->name . '</b> foi editado com sucesso!';
            return redirect()->route('aluno.lista')->with(['sucesso' => $sucesso, 'nome' => $aluno->nome]);   

            return redirect()->route('aluno.lista');
            }  
        else {
            $alerta = '<b>' . Auth::user()->name . '</b> Você não tem permissão para editar um aluno!';
            return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
        }  
    }
    


    public function PesquisarAluno(Request $request){
    $pesquisa = $request->get('q');

    if(Auth::user()->permissao == 3){  
        $users = User::where('name', 'LIKE', '%'.$pesquisa.'%')->orWhere('email', 'LIKE', '%'.$pesquisa.'%')->get();

        return view('portal.admin.alunos.lista')->with(['users'=>$users]);
     }
     else {
        $alerta = '<b>' . Auth::user()->name . '</b> Você não tem acesso a essa área!';
        return redirect()->route('portal.dashboard')->with('alerta', $alerta);   
    }  
    }


}
