@extends('base.header')

@section('title', 'Lista de cursos')

@section('content')

<div class="container">
    <div class="col-12">
        <div class="ard-header d-flex">
            <div class="d-flex align-middle mr-0 ml-auto mt-auto pb-auto mb-auto pt-auto" style="margin-bottom: 10px!important">
                <div class="align-middle mr-0 ml-auto mt-auto pb-auto mb-auto pt-auto">
                    <a href= "{{Route('curso.add')}}" class="btn btn-success"><i class="fe fe-plus mr-2"></i>Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title"> Alunos </h3>
                <div class="align-middle mr-0 ml-auto mt-auto pb-auto mb-auto pt-auto">
                <form method="get" action="{{Route('curso.buscar')}}">
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
                            <th>Curso</th>
                            <th>Duração</th>
                            <th>Quantidade de turmas</th>
                            <th>Total de alunos</th>
                            <th>Avaliação do curso</th>
                            <th>Nota média</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                            <tr>
                            <td><a href="#" class="text-inherit">{{$curso->nome}}</a></td>
                            <td>{{$curso->duracao}}</td>
                            <td></td>
                            <td>5 Cursos</td>
                            <td><span class="status-icon bg-warning"></span>Esperando turma</td>
                            <td>8.75</td>
                            <td class="text-right">
                            
                            <a href="{{Route('curso.edit', $curso->id)}}" class="btn btn-icon btn-sm"> <i class="fe fe-edit"></i> </a>
                            </td>
                            <td>
                            <a href="{{Route('curso.delete',$curso->id)}}" class="btn btn-icon btn-sm"><i class="fe fe-trash"></i> </a> 

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