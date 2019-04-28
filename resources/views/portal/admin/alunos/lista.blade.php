@extends('base.header')

@section('title', 'Treinamentos Home Page')

@section('content')

<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title"> Alunos </h3>
                <div class="align-middle mr-0 ml-auto mt-auto pb-auto mb-auto pt-auto">
                <form method="get" action="{{Route('aluno.buscar')}}">
                    <div class="input-icon">
                        <input name="q" type="search" class="form-control" placeholder="Procurar por...">
                        <a class="input-icon-addon"> <i class="fe fe-search"></i> </a>
                    </div>
                    
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>Data Nascimento</th>
                            <th>Email</th>
                            <th>Cursos inscritos</th>
                            <th>Status</th>
                            <th>Média</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                            <td><a href="#" class="text-inherit">{{$user->name}}</a></td>
                            <td><?php $datanasc = date("d-m-Y", strtotime($user->data_nasc)); echo $datanasc; ?></td>
                            <td>{{$user->email}}</td>
                            <td>5 Cursos</td>
                            <td><span class="status-icon bg-warning"></span>Esperando turma</td>
                            <td>8.75</td>
                            <td class="text-right">
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fe fe-settings"> </i> Opções</a>
                                    <div class="dropdown-menu dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item"><i class="fe fe-book"> </i> Registar em um curso</a>
                                        <a href="#" class="dropdown-item"><i class="fe fe-unlock"> </i> Trocar senha</a>
                                        <a href="#" class="dropdown-item"><i class="fe fe-trash-2"> </i> Deletar usuário</a>
                                    </div>
                                </li>
                            </td>
                            <td>
                                <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                            </td>
                                
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>                     
</div>
@stop