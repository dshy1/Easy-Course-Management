@extends('base.header')

@section('title', 'Portal do Aluno')

@section('content')

<div class="my-3 my-md-5">
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Meus cursos</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>cursos</th>
                                <th>area</th>
                                <th>inscritos</th>
                                <th>nível</th>
                                <th>Status</th>
                                <th>Professor</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="invoice.html" class="text-inherit">Corel Draw</a>
                                </td>
                                <td>Gráfica</td>
                                <td>120</td>
                                <td>Todos</td>
                                <td><span class="status-icon bg-success"></span>Ativo</td>
                                <td>Eduardo</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>&nbsp;
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice.html" class="text-inherit">Photoshop</a>
                                </td>
                                <td>Gráfica</td>
                                <td>12</td>
                                <td>Todos</td>
                                <td><span class="status-icon bg-warning"></span>&nbsp;Inicio em &lt;date&gt;</td>
                                <td>Luiz</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>&nbsp;
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice.html" class="text-inherit">After Effects</a>
                                </td>
                                <td>Audio visual</td>
                                <td>30</td>
                                <td>Todos</td>
                                <td><span class="status-icon bg-warning"></span>&nbsp;Início em &lt;date&gt;</td>
                                <td>Gabriel</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>&nbsp;
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice.html" class="text-inherit">Blender 3D</a>
                                </td>
                                <td>Audio Visual</td>
                                <td>15</td>
                                <td>Informática</td>
                                <td><span class="status-icon bg-secondary"></span>Aguardando Inscrições</td>
                                <td>Pedro</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice.html" class="text-inherit">Segurança da informação</a>
                                </td>
                                <td>Programação</td>
                                <td>63</td>
                                <td>Todos</td>
                                <td><span class="status-icon bg-danger"></span>Indisponível</td>
                                <td>Paulo</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice.html" class="text-inherit">Informática básica</a>
                                </td>
                                <td>Escritório</td>
                                <td>654<br></td>
                                <td>Todos</td>
                                <td><span class="status-icon bg-secondary"></span>Aguardando Inscrições</td>
                                <td>João</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>                     
</div>
</div>
@stop